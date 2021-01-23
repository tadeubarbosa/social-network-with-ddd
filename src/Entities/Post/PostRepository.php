<?php

namespace Entities\Post;

interface PostRepository
{
    /**
     * @throws InvalidArgumentException
     */
    public function text(Post $post): void;

    /**
     * @throws InvalidArgumentException
     */
    public function image(Post $post): void;

    /**
     * @throws InvalidArgumentException
     */
    public function video(Post $post): void;
}