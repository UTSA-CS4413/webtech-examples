<?php
// switch.php

include_once "templateFunctions.php";
html_top("Day of Week Converter");

$day_number = rand(1, 10); // more than 7 to test default case

echo "<p>$day_number corresponds to ";
switch ($day_number) {
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
    default:
        echo "no day of the week";
}
echo ".</p>";

html_bottom();
