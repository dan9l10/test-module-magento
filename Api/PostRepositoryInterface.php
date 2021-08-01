<?php
namespace Danylo\Blog\Api;

use Danylo\Blog\Api\Data\PostInterface;

interface PostRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getList();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param PostInterface $model
     * @return mixed
     */
    public function save(PostInterface $model);
}
