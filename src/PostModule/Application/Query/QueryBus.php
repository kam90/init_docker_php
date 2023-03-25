<?php

namespace App\PostModule\Application\Query;

interface QueryBus
{
    public function query($query): mixed;
}