<?php
// process2.php

include_once "templateFunctions.php";

html_top("Day of the Week to Number");

$days = [
    '1' => 'sunday',
    '2' => 'monday',
    '3' => 'tuesday',
    '4' => 'wednesday',
    '5' => 'thursday',
    '6' => 'friday',
    '7' => 'saturday'
];

if (!is_array($_POST) || empty($_POST)) {
    echo "<p>Enter a day at <a href='send2.php'>send2.php</a></p>";
} else if (!isset($_POST['day'])) {
    echo "<p>You did not enter a day!</p>";
} else {
    $user_day = strtolower($_POST['day']);
    if (!in_array($user_day, $days))
        echo "<p>$_POST[day] is not a valid day of the week!</p>";
    else {
        $dayNumber = array_search($user_day, $days);
        echo "<p>$_POST[day] is day number $dayNumber of the week.</p>";
    }
}
html_bottom();