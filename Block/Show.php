<?php


namespace Danylo\Blog\Block;

use Danylo\Blog\Api\PostRepositoryInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Danylo\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;

class Show extends Template
{
    protected $_postCollectionFactory;
    private $postRepository;
    public function __construct(
        Context $context,
        PostRepositoryInterface $postRepository,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        $this->postRepository = $postRepository;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getPost(){
        $id_post = $this->_request->getParam('id');
        return $this->postRepository->getById($id_post);
        /*$postCollection = $this->_postCollectionFactory->create();
        $post = $postCollection->getItemById($id_post);
        if($post){
            return $post;
        }
        return null;*/
    }
}
