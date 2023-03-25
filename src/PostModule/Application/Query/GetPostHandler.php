<?php

namespace App\PostModule\Application\Query;

class GetPostHandler
{
    public function __invoke(GetPost $query): void
    {
        dd('Get post query');
    }
}