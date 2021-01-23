<?php

namespace Entities\Post;

class PostImage extends Post
{
    public static function withIdUrlUserIdAndVisibility(string $id, string $url, int $userId, int $visibility)
    {
        return new self(
            $id,
            $userId,
            PostTypes::IMAGE,
            $visibility,
            $url
        );
    }

    private function __construct(string $id, int $userId, int $postTypeId, int $visibility, string $url)
    {
        parent::__construct($id, $userId, $postTypeId, $visibility, null, $url);
    }
}