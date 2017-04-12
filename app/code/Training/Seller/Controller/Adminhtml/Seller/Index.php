<?php

namespace Training\Seller\Controller\Adminhtml\Seller;

/**
 * Admin Action : seller/index
 *
 */
class Index extends AbstractAction
{
    /**
     * Execute the action
     *
     * @return void
     */
    public function execute()
    {
        $model = $this->modelFactory->create();
        $model->getResource()->load($model, 1);
        echo '<pre>';
        print_r($model->getData());
        echo '</pre>';
    }
}
