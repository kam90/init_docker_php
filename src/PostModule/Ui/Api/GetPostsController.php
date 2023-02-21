<?php

namespace App\PostModule\Ui\Api;

use App\PostModule\Domain\Post;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Uid\Uuid;

class GetPostsController extends AbstractController
{
    public function __construct()
    {
    }

    public function __invoke(): JsonResponse
    {
        $data = new ArrayCollection();
        for ($i=0; $i<10; $i++) {
            $data->add(new Post(Uuid::v4(), 'Title '.$i+1));
        }
        $data = $data->map(fn($post): array => ['id' => $post->getId(), 'title' => $post->getTitle()]);

        return new JsonResponse(
            [
                'data' => $data->toArray()
            ]
        );
    }
}
