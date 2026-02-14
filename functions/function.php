<?php

// This script demonstrates a simple function in PHP.
function greet($name) {
    return "Hello, $name!\n";
}

echo greet("John");

function greetWithTime($name, $time = "day") {
    return "Good $time, $name!\n";
}

echo greetWithTime("Charlie", "evening");