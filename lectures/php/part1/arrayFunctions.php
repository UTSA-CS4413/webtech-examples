<?php
// arrayFunctions.php

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

$dayNumber = rand(1, 14);

echo "<p>We have defined " . count($days) . " days of the week.</p>";

if (!array_key_exists($dayNumber, $days))
    echo "<p>$dayNumber does not correspond to a day of the week.</p>";
else
    echo "<p>$dayNumber corresponds to $days[$dayNumber].</p>";

html_bottom();
