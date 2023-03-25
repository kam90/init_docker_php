<?php

namespace App\PostModule\Application\Command;

class CreatePost
{
    public function __construct(
        private string $id,
        private string $title
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }
}