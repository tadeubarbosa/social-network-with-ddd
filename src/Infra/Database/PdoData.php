<?php

namespace Infra\Database;

use PDO;

class PdoData
{
    /** @var PDO */
    private static $instance;

    public function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            self::$instance = new PDO('sqlite::memory:');
        }
        return self::$instance;
    }

    public function prepare(string $sql): PDO
    {
        self::$instance->getInstance();
        $instance = $instance->prepare($sql);
        return $instance;
    }
}