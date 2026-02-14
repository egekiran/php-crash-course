<?php

// This code demonstrates the use of null values in PHP, including comparisons and type handling.
declare(strict_types=1);

$abc = null;
$db = null ?? "default";

var_dump(
    null == null,
    null == false,
    null == true,
    null == 0,
    null == '',
    null == [],
    $abc,
    isset($abc),
    is_null($abc),
    $db,
    empty([])
);

function greet(?string $name){
    echo "Hello, " . ($name ?? "Guest") . "!\n";
}

greet("Alice");
greet(null);

var_dump(
    array_filter([null, 0, 1, "", [], 3]),
);

