<?php


// This script demonstrates the use of variadic functions in PHP.
function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sum() . "\n";
echo sum(1) . "\n";
echo sum(1, 2, "3", 4, 5) . "\n";


function introduceTeam($teamName, ...$members) {
    echo "Team: $teamName\n";
    echo "Members: " . implode(", ", $members) . "\n";
    var_dump($members);
}

introduceTeam("Developers", "Alice", "Bob", "Charlie");

$members = ["Rashid", "Orly", "Sam", "Maya"];

introduceTeam("Designers", ...$members);
introduceTeam("System Admins", "Carol", "Dave", ...$members);