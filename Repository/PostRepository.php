<?php

namespace Danylo\Blog\Repository;

use Danylo\Blog\Api\Data\PostInterfaceFactory;
use Danylo\Blog\Api\Data\PostInterface;
use Danylo\Blog\Api\PostRepositoryInterface;
use Danylo\Blog\Model\PostFactory;
use Danylo\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @var PostInterfaceFactory
     */
    private PostInterfaceFactory $postFactory;

    /**
     * @var PostCollectionFactory
     */
    private PostCollectionFactory $postCollectionFactory;

    public function __construct(PostInterfaceFactory $postFactory, PostCollectionFactory $postCollectionFactory)
    {
        $this->postFactory = $postFactory;
        $this->postCollectionFactory = $postCollectionFactory;
    }

    public function getList()
    {
       $postCollection= $this->postCollectionFactory->create();
       return $postCollection->getItems();
    }

    public function getById($id)
    {
        $postModel = $this->postCollectionFactory->create();
        return $postModel->getItemById($id);
    }

    public function save(PostInterface $model)
    {
        // TODO: Implement save() method.
    }
}
