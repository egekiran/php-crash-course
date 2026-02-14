<?php

// This script simulates rolling a dice until a six is rolled using a do-while loop.
echo "Rolling a dice until you get a six:\n";
do {
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll.\n";

    if ($diceRoll == 6) {
        echo "You rolled a six! You win!\n";
        break;
    }

    echo "Roll again? (y/n): ";

    $rollAgain = trim(fgets(STDIN));
} while ('y' === $rollAgain);
