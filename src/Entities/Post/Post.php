<?php

namespace Entities\Post;

abstract class Post
{
    /** @var string */
    private $id;
    /** @var string */
    private $content;
    /** @var string */
    private $url;
    /** @var int */
    private $userId;
    /** @var int */
    private $typeId;
    /** @var int */
    private $visibilityId;

    public function __construct(string $id, int $userId, int $typeId, int $visibility, string $content = null, string $url = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->setUserId($userId);
        $this->setTypeId($typeId);
        $this->setVisibilityId($visibilityId);
        $this->setUrl($url);
    }

    public function setUserId(int $userId): void
    {
        if ($userId <= 0) {
            throw new InvalidArgumentException("You must pass an valid user id.");
        }
        $this->userId = $userId;
    }

    public function setTypeId(int $typeId): void
    {
        if (defined("PostTypes::{$typeId}") === false) {
            throw new DomainException("There's no post type with id: {$typeId}.");
        }
        $this->typeId = $typeId;
    }

    public function setVisibilityId(int $visibilityId): void
    {
        if (defined("PostVisibility::{$visibilityId}") === false) {
            throw new DomainException("There's no visiblity with id: {$visibilityId}.");
        }
        $this->visibilityId = $visibilityId;
    }

    public function setUrl(string $url = null): void
    {
        if (!empty($url) && filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException("You must pass an valid url.");
        }
        $this->url = $url;
    }
}