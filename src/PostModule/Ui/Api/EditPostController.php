<?php

namespace App\PostModule\Ui\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EditPostController extends AbstractController
{
    public function __construct()
    {
    }

    public function __invoke(Request $request, $id): JsonResponse
    {
        return new JsonResponse(
            [
                'data' => [
                    'id' => $id
                ]
            ]
        );
    }
}
