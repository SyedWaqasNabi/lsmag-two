<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Cron;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Config\Model\ResourceModel\Config;
use Ls\Core\Helper\Data as LsHelper;
use Ls\Replication\Helper\ReplicationHelper;
use Ls\Omni\Client\Ecommerce\Entity\ReplRequest;
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommHierarchyLeaf;
use Ls\Replication\Api\ReplHierarchyLeafRepositoryInterface as ReplHierarchyLeafRepository;
use Ls\Replication\Model\ReplHierarchyLeafFactory;
use Ls\Replication\Api\Data\ReplHierarchyLeafInterface;

class ReplEcommHierarchyLeafTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_hierarchy_leaf';

    const CONFIG_PATH = 'ls_mag/replication/repl_hierarchy_leaf';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_hierarchy_leaf';

    /**
     * @property ReplHierarchyLeafRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplHierarchyLeafFactory $factory
     */
    protected $factory = null;

    /**
     * @property ReplHierarchyLeafInterface $data_interface
     */
    protected $data_interface = null;

    /**
     * @param ReplHierarchyLeafRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplHierarchyLeafRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplHierarchyLeafFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplHierarchyLeafFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param ReplHierarchyLeafInterface $data_interface
     * @return $this
     */
    public function setDataInterface($data_interface)
    {
        $this->data_interface = $data_interface;
        return $this;
    }

    /**
     * @return ReplHierarchyLeafInterface
     */
    public function getDataInterface()
    {
        return $this->data_interface;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplicationHelper $repHelper, ReplHierarchyLeafFactory $factory, ReplHierarchyLeafRepository $repository, ReplHierarchyLeafInterface $data_interface)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper, $repHelper);
        $this->repository = $repository;
        $this->factory = $factory;
        $this->data_interface = $data_interface;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '')
    {
        $request = new ReplEcommHierarchyLeaf();
        $request->getOperationInput()
                 ->setReplRequest( ( new ReplRequest() )->setBatchSize($batchsize)
                                                        ->setFullReplication($full_replication)
                                                        ->setLastKey($last_key)
                                                        ->setStoreId($storeId));
        return $request;
    }

    public function getConfigPath()
    {
        return self::CONFIG_PATH;
    }

    public function getConfigPathStatus()
    {
        return self::CONFIG_PATH_STATUS;
    }

    public function getMainEntity()
    {
        return $this->data_interface;
    }


}

