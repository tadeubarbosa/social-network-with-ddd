<?php

namespace Entities;

class Name
{
    /** @var string */
    private $name;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setName(string $name)
    {
        if (strlen($name) < 3) {
            throw new InvalidArgumentException("You must pass an name with at least 3 characters.");
        }

        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}