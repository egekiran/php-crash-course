<?php

// This script demonstrates the use of type declarations in PHP functions.
function add(int $a, int $b): int {
    return $a + $b;
}

echo add("5", 10);