<?php

class WTC_Enquiry_Model_Mysql4_Grid_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('enquiry/grid');
    }
}