<?php

namespace Entities\User;

use Entities\{Name, Email, Password};

class User
{
    /** @var int */
    private $id;
    /** @var Name */
    private $name;
    /** @var Email */
    private $email;
    /** @var Password */
    private $password;

    public function __construct(string $id, Name $name, Email $email, Password $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function changeName(string $name): self
    {
        $this->name = new Name($name);
        return $this;
    }

    public function changeEmail(string $email): self
    {
        $this->email = new Email($email);
        return $this;
    }

    public function changePassword(string $password): self
    {
        $this->password = new Password($password);
        return $this;
    }

    public function getData(): stdClass
    {
        return (object) [
            "id" => $id,
            "name" => (string) $name,
            "email" => (string) $email,
        ];
    }

    public function getDataWithPassword(): stdClass
    {
        $data = (array) $this->getData();
        $passwordData = [
            "password" => (string) $this->password,
        ];
        return (object) ($data + $passwordData);
    }
}