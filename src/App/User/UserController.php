<?php

namespace App\User;

use Entities\User\UserRepository;

class UserController
{
    /** @var UserRepository */
    private $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function register(UserDto $dto): string
    {
        try {
            $use = $dto->withEmailNameAndPassword("email", "name", "pasword");
            $this->repo->register($user);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to register the user. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }

    public function login(UserDto $dto): string
    {
        try {
            $user = $dto->withId("id");
            $this->repo->login($user);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to login right now. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }
    
    public function logout(UserDto $dto): string
    {
        try {
            $user = $dto->withId("id");
            $this->repo->logout($user);
        } catch (Exception $e) {
            throw new Exception(
                "It was not possible to logout right now. Please, try again another time."
            );
        }
        return json_encode([
            "success" => true,
        ]);
    }
}