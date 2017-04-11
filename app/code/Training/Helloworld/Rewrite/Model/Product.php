<?php

namespace Training\Helloworld\Rewrite\Model;

/**
 * Rewrite \Magento\Catalog\Model\Product
 */
class Product extends \Magento\Catalog\Model\Product {

    /**
     * Get the name of the product
     *
     * @return string
     */
    public function getName()
    {
        return parent::getName() .  ' (Hello World)';
    }
}