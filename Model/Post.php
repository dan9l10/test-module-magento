<?php


namespace Danylo\Blog\Model;


use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Danylo\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements IdentityInterface,PostInterface
{
    const CACHE_TAG = 'danylo_blog_posts';

    protected function _construct()
    {
        $this->_init('Danylo\Blog\Model\ResourceModel\Post');
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array|mixed|null
     */
    public function getContent()
    {
        return $this->getData('content');
    }

    /**
     * @return array|mixed|null
     */
    public function getName()
    {
        return $this->getData('name');
    }

    /**
     * @return array|mixed|null
     */
    public function getIdPost()
    {
        return $this->getData('id_post');
    }

    public function setName($value)
    {
        return $this->setData('name',$value);
    }
}
