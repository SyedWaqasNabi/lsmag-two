<?php

namespace Ls\Customer\Observer;

use Magento\Framework\Event\ObserverInterface;
use Zend_Validate;
use Zend_Validate_EmailAddress;
use \Ls\Omni\Helper\ContactHelper;
use \Ls\Omni\Client\Ecommerce\Entity;

/**
 * Class LoginObserver
 * @package Ls\Customer\Observer
 */
class LoginObserver implements ObserverInterface
{

    /** @var ContactHelper */
    private $contactHelper;

    /** @var \Magento\Framework\Message\ManagerInterface */
    private $messageManager;

    /** @var \Psr\Log\LoggerInterface */
    private $logger;

    /** @var \Magento\Customer\Model\Session\Proxy */
    private $customerSession;

    /** @var \Magento\Framework\App\Response\RedirectInterface */
    private $redirectInterface;

    /** @var \Magento\Framework\App\ActionFlag */
    private $actionFlag;

    /** @var \Magento\Store\Model\StoreManagerInterface */
    private $storeManager;

    /** @var \Magento\Customer\Model\CustomerFactory */
    private $customerFactory;

    /**
     * LoginObserver constructor.
     * @param ContactHelper $contactHelper
     * @param \Magento\Framework\Message\ManagerInterface $messageManager
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Customer\Model\Session\Proxy $customerSession
     * @param \Magento\Framework\App\Response\RedirectInterface $redirectInterface
     * @param \Magento\Framework\App\ActionFlag $actionFlag
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Customer\Model\CustomerFactory $customerFactory
     */
    public function __construct(
        ContactHelper $contactHelper,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Customer\Model\Session\Proxy $customerSession,
        \Magento\Framework\App\Response\RedirectInterface $redirectInterface,
        \Magento\Framework\App\ActionFlag $actionFlag,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Customer\Model\CustomerFactory $customerFactory
    ) {
        $this->contactHelper = $contactHelper;
        $this->messageManager = $messageManager;
        $this->logger = $logger;
        $this->customerSession = $customerSession;
        $this->redirectInterface = $redirectInterface;
        $this->actionFlag = $actionFlag;
        $this->storeManager = $storeManager;
        $this->customerFactory = $customerFactory;
    }

    /**
     * NAV/Omni only accept data for the authentication in the form of
     * username and password so whatever the input user provide,
     * we need to convert it into the form of Username and Password.
     * Exceptions:
     * If user exist in NAV but does not in Magento, then after login,
     * we need to create user in magento based on the data we received from NAV.
     * If input is email but the account does not exist in Magento then
     * we need to throw an error that "Email login is only available for users registered in Magento".
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Zend_Validate_Exception
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
            /** @var \Magento\Customer\Controller\Account\LoginPost\Interceptor $controller_action */
            $controller_action = $observer->getData('controller_action');

            $login = $controller_action->getRequest()->getPost('login');
            $email = $username = $login['username'];
            $websiteId = $this->storeManager->getWebsite()->getWebsiteId();
            $is_email = Zend_Validate::is($username, Zend_Validate_EmailAddress::class);
            if ($is_email) {
                $search = $this->contactHelper->search($username);
                $found = $search !== null
                    && ($search instanceof Entity\MemberContact)
                    && !empty($search->getEmail());

                if (!$found) {
                    $errorMessage   =   'Sorry. No account found with the provided email address';
                    return $this->handleErrorMessage($observer, $errorMessage);
                }
                $email = $search->getEmail();
            }

            if ($is_email) {
                $searchResults      =   $this->contactHelper->searchCustomerByEmail($email);

                if ($searchResults->getTotalCount() == 0) {
                    $errorMessage   =   'Unfortunately email login is only available for members registered in Magento';
                    return $this->handleErrorMessage($observer, $errorMessage);
                } else {
                    $customerObj = null;
                    foreach ($searchResults->getItems() as $match) {
                        $customerObj = $this->customerFactory->create()->setWebsiteId($websiteId)
                            ->loadByEmail($email);
                        break;
                    }
                    $username = $customerObj->getData('lsr_username');
                }
            }

            /** @var  Entity\MemberContact $result */
            $result = $this->contactHelper->login($username, $login['password']);

            if ($result == false) {
                $errorMessage   =   'Invalid Omni login or Omni password';
                return $this->handleErrorMessage($observer, $errorMessage);
            }

            if ($result instanceof Entity\MemberContact) {
                $this->contactHelper->processCustomerLogin($result, $login, $is_email);

                /** Update Basket to Omni */
                $this->contactHelper->updateBasketAfterLogin(
                    $result->getBasket(),
                    $result->getId(),
                    $result->getCard()->getId()
                );
            } else {
                $this->customerSession->addError(
                    __('The service is currently unavailable. Please try again later.')
                );
            }
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage());
        }
        return $this;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @param string $errorMessage
     * @return $this
     */
    private function handleErrorMessage(\Magento\Framework\Event\Observer $observer, $errorMessage = '')
    {
        $this->messageManager->addErrorMessage(
            __($errorMessage)
        );
        $this->actionFlag->set('', \Magento\Framework\App\Action\Action::FLAG_NO_DISPATCH, true);
        $observer->getControllerAction()->getResponse()->setRedirect(
            $this->redirectInterface->getRefererUrl()
        );
        return $this;
    }
}
