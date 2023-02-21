<?php

namespace App\PostModule\Ui\Api;

use App\PostModule\Domain\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Uid\Uuid;

class ShowPostController extends AbstractController
{
    public function __construct()
    {
    }

    public function __invoke(Request $request, $id): JsonResponse
    {
        $post = new Post(Uuid::v4(), 'Title');
        $data = [
            'id' => $post->getId(),
            'title' => $post->getTitle()
        ];

        return new JsonResponse(
            [
                'data' => $data
            ]
        );
    }
}
