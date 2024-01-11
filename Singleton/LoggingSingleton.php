<?php

namespace Singleton;

class LoggingSingleton
{

    private static ?LoggingSingleton $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): LoggingSingleton
    {
        if (self::$instance == null) {
            self::$instance = new LoggingSingleton();
        }

        return self::$instance;
    }

    public function log($message): void
    {
        echo $message;
    }
}