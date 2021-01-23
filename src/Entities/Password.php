<?php

namespace Entities;

class Password
{
    /** @var string */
    private $password;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $password)
    {
        $this->setPassword($password);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setPassword(string $password): void
    {
        if (strlen($password) < 8) {
            throw new InvalidArgumentException("Your password must be at least 8 characters.");
        }

        $this->password = $password;
    }

    public function __toString(): string
    {
        return $this->password;
    }
}