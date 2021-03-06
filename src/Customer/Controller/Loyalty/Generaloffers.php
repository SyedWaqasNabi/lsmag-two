<?php

namespace Ls\Customer\Controller\Loyalty;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Generaloffers
 * @package Ls\Customer\Controller\Loyalty
 */
class Generaloffers extends \Magento\Customer\Controller\AbstractAccount
{
    /** @var PageFactory */
    public $resultPageFactory;

    /**
     * Generaloffers constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(
            __('General Offers')
        );
        return $resultPage;
    }
}
