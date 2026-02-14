<?php

// This code demonstrates string formatting in PHP, including using printf, sprintf, and string padding.
$name = "Alice";
$age = 30;

printf("%s is %d years old.\n", $name, $age);

$csv = "apple, banana, cherry";
$fruits = explode(", ", $csv);
var_dump($fruits, implode("|", $fruits));

$padded = str_pad("Hello", 10, "*", STR_PAD_BOTH);
echo $padded . "\n";

var_dump(trim("   Hello World!   "));