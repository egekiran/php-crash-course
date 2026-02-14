<?php

// This code demonstrates variable scope in PHP, including global, local, and static variables.
$superHero = 'Superman';

function revealIdentity() {
    global $superHero;
    $message = "real name is Clark Kent\n";
    // $superHero = 'Spiderman';
    echo "$superHero $message";
}

revealIdentity();

function countVisitors() {
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived!\n";
}

countVisitors();
countVisitors();
countVisitors();