<?php

// This script demonstrates the use of match expressions in PHP.
$status = "200";

$message = match ((int)$status) {
    200 => "OK",
    201 => "Created",
    400 => "Bad Request",
    401 => "Unauthorized",
    403 => "Forbidden",
    404 => "Not Found",
    405 => "Method Not Allowed",
    408 => "Request Timeout",
    429 => "Too Many Requests",
    500 => "Internal Server Error",
    default => "Unknown Status Code",
};

echo $status . ": " . $message . "\n";