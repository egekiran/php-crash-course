<?php

// This script demonstrates PHP variable types and type casting.
$isStudent = 1;
var_dump($isStudent, true, $isStudent == true);

$scores = [(float) 85, "90", 95.5];
$total = array_sum($scores);
var_dump($scores, $total);

echo "Total score: $total \n";

