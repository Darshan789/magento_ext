<?php

namespace Harsh\HelloWorld\Model;



    class HelloWorld extends \Magento\Framework\Model\AbstractModel  
    {  
        protected function _construct()
        {
            $this->_init('Harsh\HelloWorld\Model\ResourceModel\HelloWorld');
        }
}