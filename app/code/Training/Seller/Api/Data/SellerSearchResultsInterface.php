<?php

namespace Training\Seller\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Seller SearchResults Interface
 *
 * @api
 *
 */
interface SellerSearchResultsInterface extends SearchResultsInterface {

    /**
     * Get seller list
     *
     * @return \Training\Seller\Api\Data\SellerInterface[]
     */
    public function getItems();

    /**
     * Get seller list
     *
     * @param \Training\Seller\Api\Data\SellerInterface[] $items
     *
     * @return ???????????
     */
    public function setItems(array $items);
}
