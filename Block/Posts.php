<?php


namespace Danylo\Blog\Block;



use Danylo\Blog\Api\PostRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Danylo\Blog\Model\ResourceModel\Post\Collection as PostCollection;
use Danylo\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use Danylo\Blog\Model\Post;
use Danylo\Blog\Model\PostFactory;

class Posts extends Template
{
    /**
     * @var PostCollectionFactory|null
     */
    protected $_postCollectionFactory = null;
    protected $_postFactory = null;
    private $postRepository;
    /**
     * Posts constructor.
     * @param Context $context
     * @param PostCollectionFactory $postCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        PostFactory $postFactory,
        PostRepositoryInterface $postRepository,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        $this->_postFactory = $postFactory;
        $this->postRepository = $postRepository;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public function getPosts(): array
    {
        return $this->postRepository->getList();
        /*$postCollection = $this->_postCollectionFactory->create();
        $postCollection->addFieldToSelect('*')->load();
        return $postCollection->getItems();*/
    }
}
