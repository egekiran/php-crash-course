<?php


// Anonymous functions (closures) in PHP
$greet = function ($name) {
    return "Hello, $name!";
};

echo $greet("David") . "\n";

$numbers = [1, 2, 3];

$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);



$message = "Bye";
$greet2 = function ($name) use ($message) {
    $message = $message . "!";
    return "$message, $name!";
};

echo $greet2("David") . "\n";
echo $message . "\n";