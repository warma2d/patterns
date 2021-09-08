<?php

namespace Patterns\GenerativePatterns\Singleton;

class Database {

    private static Database|null $database = null;
    private static \DateTime $createdAt;

    public static function getInstance(): Database
    {
        if (self::$database === null) {
            self::$database = new self;
            self::$createdAt = new \DateTime();
        }

        return self::$database;
    }

    public static function getCreatedAt(): \DateTime
    {
        return self::$createdAt;
    }

    private function __construct() { }
    private function __clone() { }
    public function __wakeup() {}
}
