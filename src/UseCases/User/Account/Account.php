<?php

namespace App\UseCases\User\Account;

class CreateAccount
{
    /** @var UserRepository */
    private $repo;
    /** @var UserDto */
    private $user;

    public function __construct(UserRepository $repo, UserDto $user)
    {
        $this->repo = $repo;
        $this->user = $user;
    }

    public function login(UserDto $user): void
    {
        $this->repo->login($this->user);
    }
    
    public function logout(UserDto $user): void
    {
        $this->repo->logout($this->user);
    }

    public function register(UserDto $user): void
    {
        $this->repo->register($this->user);
    }
    
}