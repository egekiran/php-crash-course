<?php

// This code demonstrates the use of named parameters in PHP functions.
function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice", "Hi") . "\n";
echo greet("Alice", "Welcome", true) . "\n";

echo greet(name: "Bob", shout: false) . "\n";