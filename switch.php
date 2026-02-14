<?php

// This script demonstrates the use of switch statements in PHP.
$size = "L";

switch ($size) {
    case "S":
        echo "You selected Small size.\n";
        break;
    case "M":
        echo "You selected Medium size.\n";
        break;
    case "L":
        echo "You selected Large size.\n";
        break;
    case "XL":
        echo "You selected Extra Large size.\n";
        break;
    default:
        echo "Unknown size selected.\n";
        break;
}


// This script demonstrates a switch statement for handling bad attempts.
$badAttempts = 2;

switch ($badAttempts) {
    case 3:
        echo "You are blocked due to too many bad attempts.\n";
        break;
    case 1:
    case 2:
        echo "Bad attempt detected.\n";
}