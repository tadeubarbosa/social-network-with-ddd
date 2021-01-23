<?php

namespace App\User;

use Entities\{Name, Email, Password};

class UserDto
{
    /** @var string */
    private $id;
    /** @var Name */
    private $name;
    /** @var Email */
    private $email;
    /** @var Password */
    private $password;

    public function withEmailNameAndPassword(string $email, string $name, string $password)
    {
        $this->name = new Name($name);
        $this->email = new Email($email);
        $this->password = new Password($password);
    }

    public function withId(string $id)
    {
        $this->id = $id;
    }

    public function execute(): User
    {
        return new User($this->id, $this->email, $this->name, $this->password);
    }
}