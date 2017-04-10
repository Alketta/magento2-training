<?php

namespace Training\Helloworld\Controller\Index;

/**
 * Action: Index/Index
 */
class Index extends \Magento\Framework\App\Action\Action {

  /**
   * Execute the action
   *
   * @return void
   */
  public function execute()
  {
      echo "Hello World";
      exit;
  }

}
