<?php

namespace Training\Seller\Controller\Seller;

use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Action : One seller/view
 *
 */
class View extends AbstractAction {

    /**
     * Execute the action
     *
     * @return \Magento\Framework\View\Result\Page|null
     */
    public function execute()
    {
        // get the asked identifier
        $identifier = trim($this->getRequest()->getParam('identifier'));
        if (!$identifier) {
            $this->_forward('noroute');
            return null;
        }

        // get the asked seller
        try {
            $seller = $this->sellerRepository->getByIdentifier($identifier);
        } catch (NoSuchEntityException $e) {
            $this->_forward('noroute');
            return null;
        }

        $this->registry->register('current_seller', $seller);

        // display the page using the layout
        $resultPage = $this->resultPageFactory->create();
        // Recuperation des paramètres selon un ordre défini (%1)
        $resultPage->getConfig()->getTitle()->set(__('Seller "%1"', $seller->getName()));

        return $resultPage;
    }



}
