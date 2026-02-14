<?php

// This code demonstrates different ways to handle strings in PHP, including single quotes, double quotes, heredoc, and nowdoc.
$name = "John";

// Single quotes do not interpolate variables
echo 'Hello, $name!\n';

// Double quotes interpolate variables and interpret escape characters
echo "\nHello, $name!\n";

$heredoc = <<<EOD
Multi-line string
with variable: $name\n
EOD;

$nowdoc = <<<'EOD'
Multi-line string
without variable\n
EOD;

echo $heredoc;
echo $nowdoc;