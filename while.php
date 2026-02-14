<?php

// This script implements a simple password guessing game using a while loop.
$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess === $secret) {
        echo "Congratulations! You've guessed the secret!\n";
        break;
    } else if ($attempts == $maxAttempts - 1) {
        echo "Incorrect! This was your last attempt.\n";
    } else {
        echo "Incorrect! Try again.\n Attempts left: " . ($maxAttempts - $attempts - 1) . "\n";
    }

}