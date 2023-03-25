<?php

namespace App\PostModule\Application\Command;

interface CommandBus
{
    public function dispatch($message): void;
}