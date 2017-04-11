<?php

namespace Training\Helloworld\Controller\Product;

/**
 * Action: Product/Index
 */
class Index extends \Magento\Framework\App\Action\Action {


    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    /**
     * Get the asked product
     *
     * @return \Magento\Catalog\Model\Product|null
     */
    public function getAskedProduct()
    {
        $productId = (int) $this->getRequest()->getParam('id');
        if (!$productId){
            return null;
        }

        $product = $this->productFactory->create();
        $product->getResource()->load($product, $productId);

        if (!$product->getId()) {
            return null;
        }

        return $product;
    }

    /**
     * Execute the action
     *
     * @return void
     */
    public function execute()
    {
        $product = $this->getAskedProduct();
        if (is_null($product)) {
            $this->_forward('noroute');
            return;
        }
        $this->getResponse()->appendBody('Product: ' .$product->getName());
    }
    
}
