<?php

namespace App\PostModule\Application\Command;

class CreatePostHandler
{
    public function __invoke(CreatePost $command):void
    {
        dd($command);
    }
}