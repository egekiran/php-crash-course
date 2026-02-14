<?php

// This code demonstrates the use of pure functions in PHP, which do not have side effects and always return the same output for the same input.
function add(int $a, int $b): int {
    return $a + $b;
}

var_dump(add(1, 3), add(1, 3));

$total = 0;
function addToTotal($value): int {
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(5), addToTotal(10), addToTotal(15));
