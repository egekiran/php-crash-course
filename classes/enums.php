<?php

enum DaysOfWeek: string {
    case MONDAY = 'Monday';
    case TUESDAY = 'Tuesday';
    case WEDNESDAY = 'Wednesday';
    case THURSDAY = 'Thursday';
    case FRIDAY = 'Friday';
    case SATURDAY = 'Saturday';
    case SUNDAY = 'Sunday';
}

$today = DaysOfWeek::WEDNESDAY;

if ($today === DaysOfWeek::WEDNESDAY) {
    echo "It is Wed!\n";
}

enum Color: string {
    case RED = '#FF0000';
    case GREEN = '#00FF00';
    case BLUE = '#0000FF';
}

echo Color::RED->value;


function isWeekend(DaysOfWeek $day): bool {
    return $day === DaysOfWeek::SUNDAY;
}

echo isWeekend(DaysOfWeek::MONDAY) ? 'Yes' : 'No';
