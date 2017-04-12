<?php

namespace Training\Seller\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Training\Seller\Api\Data\SellerInterface;

/**
 * Seller Repository Interface
 *
 * @api
 *
 */
interface SellerRepositoryInterface {

    /**
     * Retrieve a seller by its id
     *
     * @param int $objectId
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     * 
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($objectId);

    /**
     * Retrieve a seller by its identifier
     *
     * @param string $objectIdentifier
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     * 
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByIdentifier($objectIdentifier);
    
    /**
     * Retrieve a seller by criteria
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Training\Seller\Api\Data\SellerSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria = null);

    /**
     * Save a seller
     *
     * @param \Training\Seller\Api\Data\SellerInterface $object
     *
     * @return \Training\Seller\Api\Data\SellerInterface
     *
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(SellerInterface $object);

    /**
     * Delete a seller by its id
     *
     * @param int $objectId
     *
     * @return bool
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     *
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById($objectId);

    /**
     * Delete a seller by its identifier
     *
     * @param string $objectIdentifier
     *
     * @return bool
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     *
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteByIdentifier($objectIdentifier);

}
