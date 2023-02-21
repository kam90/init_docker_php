<?php

namespace App\PostModule\Ui\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Uid\Uuid;

class CreatePostController extends AbstractController
{
    public function __construct()
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        $id = Uuid::v4();
        return new JsonResponse(
            [
                'data' => [
                    'id' => $id
                ]
            ]
        );
    }
}
