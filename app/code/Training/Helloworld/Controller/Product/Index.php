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
        $id = (int) $this->getRequest()->getParam('id');
        if (!$id){
            return null;
        }

        $product = $this->productFactory->create()->load($id);

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
