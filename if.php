<?php

// Example of a simple if statement
$x = 10;

if ($x > 5) {
    echo "x is greater than 5\n";
} else {
    echo "x is not greater than 5\n";
}

// Example of if-else statement
$score = 60;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

// Example of nested if statements
$num = 15;

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "Positive even number\n";
    } else {
        echo "Positive odd number\n";
    }
} else {
    echo "Negative number\n";
}

// Example of a simple login check
$username = "admin";
$password = "passwd123";

if ($username == "admin" && $password == "passwd123") {
    echo "Login successful\n";
} else {
    echo "Login failed\n";
}