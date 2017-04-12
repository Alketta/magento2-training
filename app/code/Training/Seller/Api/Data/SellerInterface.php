<?php

namespace Training\Seller\Api\Data;

/**
 * Seller Data Interface
 *
 * @api
 *
 */
interface SellerInterface {

    /**
     * Table Name
     */
    const TABLE_NAME = 'training_seller';

    /**
     * Constants keys
     */
    const FIELD_SELLER_ID  = 'seller_id';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NAME       = 'name';
    const FILED_UPDATED_AT = 'updated_at';
    const FILED_CREATED_AT = 'created_at';

    /**
     * Get field: seller_id
     *
     * @return int|null
     */
    public function getSellerId();

    /**
     * Get field: identifier
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Get field: name
     *
     * @return string
     */
    public function getName();

    /**
     * Get field: updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Get field: created_at
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set field: seller_id
     *
     * @param int $value
     *
     * @return SellerInterface
     */
    public function setSellerId($value);

    /**
     * Set field: identifier
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setIdentifier($value);

    /**
     * Set field: name
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setName($value);

    /**
     * Set field: updated_at
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setUpdatedAt($value);

    /**
     * Set field: created_at
     *
     * @param string $value
     *
     * @return SellerInterface
     */
    public function setCreatedAt($value);

}
