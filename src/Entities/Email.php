<?php

namespace Entities;

class Email
{
    /** @var string */
    private $email;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("You must pass an valid email.");
        }

        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}