<?php

namespace App\PostModule\Ui\Api;

use App\PostModule\Application\Query\QueryBus;
use App\PostModule\Application\Query\GetPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ShowPostController extends AbstractController
{
    public function __construct(
        private readonly QueryBus $queryBus
    ) {
    }

    public function __invoke(Request $request, $id): JsonResponse
    {
        $data = $this->queryBus->query(new GetPost());
        return $this->json($data);
    }
}
