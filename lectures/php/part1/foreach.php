<?php
// foreach.php

include_once "templateFunctions.php";
html_top("Days of the Week");

$days = [
    '1' => 'Sunday',
    '2' => 'Monday',
    '3' => 'Tuesday',
    '4' => 'Wednesday',
    '5' => 'Thursday',
    '6' => 'Friday',
    '7' => 'Saturday'
];

echo "<ul>";
foreach ($days as $number => $day_name){
    echo "<li>$day_name is day number $number.</li>";
}
echo "</ul>";

html_bottom();
