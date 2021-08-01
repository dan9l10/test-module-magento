<?php
namespace Danylo\Blog\Api\Data;

interface PostInterface
{
    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * @param $value
     * @return mixed
     */
    public function setName($value);

}
