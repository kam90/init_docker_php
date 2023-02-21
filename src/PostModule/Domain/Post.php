<?php

namespace App\PostModule\Domain;

class Post
{
    public function __construct(
        private string $id,
        private string $title
    ) {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

}