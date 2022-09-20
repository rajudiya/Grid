<?php

namespace Webkul\Grid\Model\ResourceModel\GridModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'gd_id';

    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Webkul\Grid\Model\GridModel',
            'Webkul\Grid\Model\ResourceModel\GridModel'
        );
    }
}
