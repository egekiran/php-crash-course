<?php

// This script demonstrates the performance of using references in a foreach loop
// by processing a large array and measuring execution time and memory usage.

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$startMem = memory_get_usage();

$out = [];

foreach ($largeArray as &$value) {
    $out[] = $value * 2;
}

$endTime = microtime(true);
$endMem = memory_get_usage();
$executionTime = $endTime - $startTime;
$memoryUsage = round(($endMem - $startMem) / 1024 / 1024);

echo "Time: $executionTime seconds\n";
echo "Memory: $memoryUsage Mbs\n";