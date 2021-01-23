<?php

namespace Entities\User;

interface UserRepository
{
    /**
     * @throws InvalidArgumentException
     */
    public function login(UserDto $user): void;

    /**
     * @throws InvalidArgumentException
     */
    public function logout(UserDto $user): void;

    /**
     * @throws InvalidArgumentException
     */
    public function register(UserDto $user): void;
}