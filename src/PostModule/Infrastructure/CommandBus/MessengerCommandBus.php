<?php

namespace App\PostModule\Infrastructure\CommandBus;

use App\PostModule\Application\Command\CommandBus;
use Symfony\Component\Messenger\MessageBusInterface;

class MessengerCommandBus implements CommandBus
{
    private MessageBusInterface $commandBus;
    public function __construct(
        MessageBusInterface $commandBus
    ) {
        $this->commandBus = $commandBus;
    }

    public function dispatch($message): void
    {
        $this->commandBus->dispatch($message);
    }


}