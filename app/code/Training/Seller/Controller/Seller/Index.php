<?php

namespace Training\Seller\Controller\Seller;

/**
 * Action : seller/index
 *
 */
class Index extends AbstractAction {

    /**
     * Execute the action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $searchCriteria = $this->getSearchCriteria();

        // get the list of the sellers
        $result = $this->sellerRepository->getList($searchCriteria);

        // save it to the registry
        $this->registry->register('seller_search_result', $result);

        // display the page using the layout
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Sellers'));

        return $resultPage;
    }

    /**
     * Get the search criteria
     *
     * @return \Magento\Framework\Api\SearchCriteria
     */
    protected function getSearchCriteria()
    {
        return $this->searchCriteriaBuilder->create();
    }

}

