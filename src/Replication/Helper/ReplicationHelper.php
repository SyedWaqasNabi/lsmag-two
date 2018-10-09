<?php

namespace Ls\Replication\Helper;


use Ls\Omni\Client\Ecommerce\Entity;
use Ls\Omni\Client\Ecommerce\Operation;
use Ls\Core\Model\LSR;
use Magento\Eav\Model\Config;
use Magento\Eav\Model\Entity\Attribute\Set;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\FilterGroupBuilder;
use Ls\Replication\Api\ReplImageLinkRepositoryInterface;

class ReplicationHelper extends \Magento\Framework\App\Helper\AbstractHelper
{

    /** @var \Magento\Store\Model\StoreManagerInterface  */
    protected $storeManager;

    /** @var \Magento\Framework\Filesystem  */
    protected $_filesystem;

    /** @var SearchCriteriaBuilder */
    protected $searchCriteriaBuilder;

    /** @var FilterBuilder */
    protected $filterBuilder;

    /** @var FilterGroupBuilder */
    protected $filterGroupBuilder;

    /** @var ReplImageLinkRepositoryInterface */
    protected $replImageLinkRepositoryInterface;

    /** @var Config */
    protected $eavConfig;

    /** @var Set */
    protected $attributeSet;

    /**
     * ReplicationHelper constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param FilterBuilder $filterBuilder
     * @param FilterGroupBuilder $filterGroupBuilder
     * @param ReplImageLinkRepositoryInterface $replImageLinkRepositoryInterface
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\Filesystem $Filesystem
     * @param Config $eavConfig
     * @param Set $attributeSet
     */

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        FilterBuilder $filterBuilder,
        FilterGroupBuilder $filterGroupBuilder,
        ReplImageLinkRepositoryInterface $replImageLinkRepositoryInterface,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Filesystem $Filesystem,
        Config $eavConfig,
        Set $attributeSet
    )
    {
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->filterGroupBuilder = $filterGroupBuilder;
        $this->storeManager = $storeManager;
        $this->_filesystem = $Filesystem;
        $this->replImageLinkRepositoryInterface = $replImageLinkRepositoryInterface;
        $this->eavConfig = $eavConfig;
        $this->attributeSet = $attributeSet;

        parent::__construct(
            $context
        );
    }

    /**
     * @param string $filtername
     * @param string $filtervalue
     * @return \Magento\Framework\Api\SearchCriteria
     */
    public function buildCriteriaForNewItems($filtername = '', $filtervalue = '', $conditionType = 'eq', $pagesize = 100)
    {
        // creating search criteria for two fields
        // processed = 0 which means not yet processed
        $attr_processed = $this->filterBuilder->setField('processed')
            ->setValue('0')
            ->setConditionType('eq')
            ->create();
        // is_updated = 1 which means may be processed already but is updated on omni end
        $attr_is_updated = $this->filterBuilder->setField('is_updated')
            ->setValue('1')
            ->setConditionType('eq')
            ->create();
        // building OR condition between the above two criteria
        $filterOr = $this->filterGroupBuilder
            ->addFilter($attr_processed)
            ->addFilter($attr_is_updated)
            ->create();
        // adding criteria into where clause.
        $criteria = $this->searchCriteriaBuilder->setFilterGroups([$filterOr]);
        if ($filtername != '' && $filtervalue != '') {
            $criteria->addFilter(
                $filtername, $filtervalue, $conditionType
            );
        }
        $criteria->addFilter('IsDeleted', 0, 'eq');
        $criteria->setPageSize($pagesize);
        return $criteria->create();
    }

    /**
     * @param string $filtername
     * @param string $filtervalue
     * @return \Magento\Framework\Api\SearchCriteria
     */
    public function buildCriteriaForProductAttributes($item_id = '', $pagesize = 100)
    {
        $attr_processed = $this->filterBuilder->setField('processed')
            ->setValue('0')
            ->setConditionType('eq')
            ->create();
        // is_updated = 1 which means may be processed already but is updated on omni end
        $attr_is_updated = $this->filterBuilder->setField('is_updated')
            ->setValue('1')
            ->setConditionType('eq')
            ->create();
        // building OR condition between the above two criteria
        $filterOr = $this->filterGroupBuilder
            ->addFilter($attr_processed)
            ->addFilter($attr_is_updated)
            ->create();
        // adding criteria into where clause.
        $criteria = $this->searchCriteriaBuilder->setFilterGroups([$filterOr]);
        $criteria->addFilter('LinkType', 0, 'eq');
        $criteria->addFilter('LinkField1', $item_id, 'eq');
        $criteria->addFilter('IsDeleted', 0, 'eq');
        $criteria->setPageSize($pagesize);
        return $criteria->create();
    }

    /**
     * Create Build Criteria with Array of filters as a parameters
     * @param array $filters
     * @param int $pagesize
     * @return \Magento\Framework\Api\SearchCriteria
     */
    public function buildCriteriaForArray(array $filters, $pagesize = 100)
    {
        $attr_processed = $this->filterBuilder->setField('processed')
            ->setValue('0')
            ->setConditionType('eq')
            ->create();
        // is_updated = 1 which means may be processed already but is updated on omni end
        $attr_is_updated = $this->filterBuilder->setField('is_updated')
            ->setValue('1')
            ->setConditionType('eq')
            ->create();
        // building OR condition between the above two criteria
        $filterOr = $this->filterGroupBuilder
            ->addFilter($attr_processed)
            ->addFilter($attr_is_updated)
            ->create();
        // adding criteria into where clause.
        $criteria = $this->searchCriteriaBuilder->setFilterGroups([$filterOr]);
        if (!empty($filters)) {
            foreach ($filters as $filter) {
                $criteria->addFilter($filter['field'], $filter['value'], $filter['condition_type']);
            }
        }
        $criteria->addFilter('IsDeleted', 0, 'eq');
        $criteria->setPageSize($pagesize);
        return $criteria->create();
    }


    /**
     * Create Build Criteria with Array of filters as a parameters and return Updated Only
     * @param array $filters
     * @param int $pagesize
     * @return \Magento\Framework\Api\SearchCriteria
     */
    public function buildCriteriaGetUpdatedOnly(array $filters, $pagesize = 100)
    {
        $criteria = $this->searchCriteriaBuilder;
        if (!empty($filters)) {
            foreach ($filters as $filter) {
                $criteria->addFilter($filter['field'], $filter['value'], $filter['condition_type']);
            }
        }
        $criteria->addFilter('IsDeleted', 0, 'eq');
        $criteria->addFilter('is_updated', 1, 'eq');
        $criteria->setPageSize($pagesize);
        return $criteria->create();
    }



    /**
     * Create Build Exit Criteria with Array of filters as a parameters
     * @param array $filters
     * @param int $pagesize
     * @return \Magento\Framework\Api\SearchCriteria
     */
    public function buildExitCriteriaForArray(array $filters, $pagesize = 1)
    {
        $searchCriteria = $this->searchCriteriaBuilder;
        if (!empty($filters)) {
            foreach ($filters as $filter) {
                $searchCriteria->addFilter($filter['field'], $filter['value'], $filter['condition_type']);
            }
        }
        $searchCriteria->setPageSize($pagesize);
        return $searchCriteria->create();
    }

    /**
     * @param string $nav_id
     * @param string $type
     * @return bool|\Magento\Framework\Api\AbstractExtensibleObject[]
     */
    public function getImageLinksByType($nav_id = '', $type = 'Item Category')
    {
        //first and the most important condition
        if ($nav_id == '' || is_null($nav_id)) {
            return false;
        }
        $criteria = $this->searchCriteriaBuilder->addFilter(
            'KeyValue', $nav_id, 'eq'
        )->addFilter(
            'TableName', $type, 'eq'
        )->create();

        /** @var \Ls\Replication\Model\ReplImageLinkSearchResults $items */
        $items = $this->replImageLinkRepositoryInterface->getList($criteria);
        $this->_logger->debug('trying to find item for ' . $nav_id . ' with type ' . $type);
        if ($items->getTotalCount() > 0) {
            $this->_logger->debug('Found items for ' . $nav_id . ' with type ' . $type);
            return $items->getItems();
        }
        return false;
    }

    /**
     * @param string $image_id
     * @return Entity\ImageStreamGetByIdResponse|\Ls\Omni\Client\ResponseInterface|null|string
     */
    public function imageStreamById($image_id = '')
    {
        $response = NULL;
        if ($image_id == '' || $image_id == NULL) {
            return $response;
        }
        $request = new Operation\ImageStreamGetById();
        $entity = new Entity\ImageStreamGetById();
        $entity->setId($image_id);
        try {
            $response = $request->execute($entity);
        } catch (Exception $e) {
            $this->_logger->error($e->getMessage());
        }
        return $response ? $response->getResult() : $response;
    }


    /**
     * @return null|string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getDefaultAttributeSetId()
    {
        return $this->eavConfig->getEntityType('catalog_product')
            ->getDefaultAttributeSetId();
    }

    /**
     * @param string $attributeset
     * @return int|null
     */
    public function getDefaultGroupIdOfAttributeSet($attributeset = '')
    {
        if ($attributeset == '') {
            $attributeset = 4;
        }
        return $this->attributeSet->getDefaultGroupId($attributeset);
    }

    /**
     * Format the Nav attribute code according to Magento without space and lowercase
     * @param $code
     * @return mixed|string
     */
    public function formatAttributeCode($code)
    {
        $code = strtolower(trim($code));
        $code = str_replace(" ", "_", $code);
        return 'ls_' . $code;
    }


    /**
     * @return array
     */
    public function getAllWebsitesIds()
    {

        $websiteIds = array();
        $websites = $this->storeManager->getWebsites();
        /** @var \Magento\Store\Model\Website\Interceptor $website */
        foreach ($websites as $website) {
            $websiteIds[] = $website->getId();
        }
        return $websiteIds;

    }


}