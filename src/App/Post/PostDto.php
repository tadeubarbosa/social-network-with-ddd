<?php

namespace App\Post;

use Entities\Post\{Post, PostText, PostImage, PostVideo};

class PostDto
{
    public static function generateText(string $id, string $content, int $userId, int $visibility): Post
    {
        return PostText::withIdUrlUserIdAndVisibility($id, $content, $userId, $visibility);
    }

    public static function generateImage(string $id, string $url, int $userId, int $visibility): Post
    {
        return PostImage::withIdUrlUserIdAndVisibility($id, $url, $userId, $visibility);
    }

    public static function generateVideo(string $id, string $url, int $userId, int $visibility): Post
    {
        return PostVideo::withIdUrlUserIdAndVisibility($id, $url, $userId, $visibility);
    }
}