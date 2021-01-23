<?php

namespace Entities\Post;

class PostText extends Post
{
    public static function withIdUrlUserIdAndVisibility(string $id, string $content, int $userId, int $visibility)
    {
        return new self(
            $id,
            $userId,
            PostTypes::TEXT,
            $visibility,
            $content
        );
    }

    private function __construct(string $id, int $userId, int $postTypeId, int $visibility, string $content)
    {
        parent::__construct($id, $userId, $postTypeId, $visibility, $content);
    }
}