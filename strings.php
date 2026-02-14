<?php

// This code demonstrates different ways to handle strings in PHP, including single quotes, double quotes, heredoc, and nowdoc.
$name = "John";

echo 'Hello, $name!\n';
echo "Hello, $name!\n";

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