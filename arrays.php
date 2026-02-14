<?php

// This script demonstrates various array operations in PHP.
$simpleArray = [1, 2, 3, 4, 5];

$associativeArray = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

echo $simpleArray[0] . "\n";
echo $associativeArray["name"] . "\n";

$simpleArray[] = 6;
$associativeArray["country"] = 'USA';

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matrix[1][2] . "\n";

$fruits = ['apple', 'banana', 'orange'];

var_dump(count($fruits));

sort($fruits);
var_dump($fruits);

rsort($fruits);
var_dump($fruits);

asort($associativeArray);
var_dump($associativeArray);

ksort($associativeArray);
var_dump($associativeArray);

$numbers = range(1, 5);
var_dump($numbers);

// array_map applies a callback to each element of the array
$squared = array_map(fn($n) => $n * $n, $numbers);
var_dump($squared);

// array_filter filters elements based on a condition
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 === 0);
var_dump($evenNumbers);

// array_reduce reduces the array to a single value
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0);
var_dump($sum);

$moreNumbers = [0, ...$numbers, 6];
var_dump($moreNumbers);

[$first, $second, $third] = $fruits;
var_dump($first, $second, $third);

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

var_dump(
    array_intersect($set1, $set2),
    array_merge($set1, $set2),
    array_diff($set1, $set2),
    array_unique(array_merge($set1, $set2))
);

$keys = array_keys($associativeArray);
$values = array_values($associativeArray);
var_dump($keys, $values);

var_dump(
    array_key_exists("name", $associativeArray),
    in_array("John", $associativeArray, true),
);

$fruitString = implode(" | ", $fruits);
$backToArray = explode(" | ", $fruitString);
var_dump($fruitString, $backToArray);

var_dump(
    array_merge($set1, $set2),
    array_merge($associativeArray, ["country" => "DE"]),
);

