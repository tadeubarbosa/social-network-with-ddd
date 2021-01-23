<?php

namespace Infra\User;

use Entities\User\UserRepository;
use App\User\UserDto;

class UserRepositoryPdo implements UserRepository
{
    public function __construct()
    {
        $this->db = new PdoData();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function create(UserDto $user): void
    {
        $stmt = $this->db->prepare("INSERT INTO `users` (name, email, password)
            VALUES (:name, :email, :password)");
        $stmt->bindValue(':name', $user->name());
        $stmt->bindValue(':email', $user->email());
        $stmt->bindValue(':password', $user->password());
        $stmt->execute();
    }

    /**
     * @throws InvalidArgumentException
     */
    public function login(UserDto $user): void
    {
        // TODO: Not implemented yet
    }

    /**
     * @throws InvalidArgumentException
     */
    public function logout(UserDto $user): void
    {
        // TODO: Not implemented yet
    }

    /**
     * @throws InvalidArgumentException
     */
    public function register(UserDto $user): void
    {
        // TODO: Not implemented yet
    }
}