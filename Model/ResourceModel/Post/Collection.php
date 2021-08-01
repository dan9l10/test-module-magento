<?php


namespace Danylo\Blog\Model\ResourceModel\Post;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Danylo\Blog\Model\Post','Danylo\Blog\Model\ResourceModel\Post');
    }
}
