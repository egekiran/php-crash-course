<?php

// This script implements a countdown for a rocket launch using a for loop.
echo "Rocket Launch Countdown:\n";

for ($i = 10; $i > 0; $i--) {
    echo $i . "\t";

    sleep(1);

    if (1 == $i) {
        echo "Liftoff!🚀\n";
    }
}