<?php

namespace App\Post;

use Entities\Post\PostRepository;

class PostController
{
    /** @var PostRepository */
    private $repo;

    public function __construct(PostRepository $repo)
    {
        $this->repo = $repo;
    }

    public function text(PostDto $dto): string
    {
        try {
            $post = $dto->generateText("id", "content", "userId", "visibility");
            $this->repo->text($post);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to post it right now. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }

    public function image(PostDto $dto): string
    {
        try {
            $post = $dto->generateImage("id", "url", "userId", "visibility");
            $this->repo->image($post);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to post it right now. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }

    public function video(PostDto $dto): string
    {
        try {
            $post = $dto->generateVideo("id", "url", "userId", "visibility");
            $this->repo->video($post);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to post it right now. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }
}