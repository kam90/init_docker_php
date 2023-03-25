<?php

namespace App\PostModule\Ui\Api;

use App\PostModule\Application\Command\CommandBus;
use App\PostModule\Application\Command\CreatePost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Uid\Uuid;

class CreatePostController extends AbstractController
{
    public function __construct(
        private readonly CommandBus $commandBus
    ) {
    }

    public function __invoke(Request $request): JsonResponse
    {
        $this->commandBus->dispatch(
            new CreatePost(
                Uuid::v4(),
                'Lorem ipsum'
            )
        );

        return $this->json([]);
    }
}
