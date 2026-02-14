<?php

// This code demonstrates the use of recursion in PHP, where a function calls itself to solve a problem.
function factorial(int $n): int {
    echo "$n\n";
    if ($n === 0 || $n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

var_dump(factorial(5));