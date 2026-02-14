<?php


// Private and Static Properties and Methods in PHP
class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $number): float {
        return $number * $number;
    }
}

class Connection {
    private static $instance = null;
    private function __construct(){}

    public static function singleton(){
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();

var_dump(
    $connection,
    Connection::singleton() === $connection
);

var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);