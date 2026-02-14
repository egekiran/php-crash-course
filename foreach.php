<?php

// This script implements a simple shopping basket using a foreach loop.
$basket = [
    "Apple" => 3,
    "Banana" => 4,
];

$total = 0;

foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total += $quantity;
}

echo "Total items: $total\n";