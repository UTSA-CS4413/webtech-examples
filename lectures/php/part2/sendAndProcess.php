<?php
// sendAndProcess.php

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


// if the form has been submitted
if (is_array($_POST) &&  !empty($_POST)) {
    if (!isset($_POST['day']) || !strlen($_POST['day'])) {
        $error = "You did not enter a day!";
    }else if (!in_array(strtolower($_POST['day']), $days)) {
        $error = "$_POST[day] is not a valid day of the week!";
    } else {
        $day_number = array_search(strtolower($_POST['day']), $days);

        echo "<p>$_POST[day] is day number $day_number of the week.</p>";
    }
}

if(isset($error))
    echo '<p style="color: red">Error: ' . $error .'</p>';

// always print the form
echo '<form action="sendAndProcess.php" method="post">
    <label for="day">Enter a day of the week:</label>
    <input type="text" id="day" name="day">
    <input type="submit" value="Submit">
</form>';

html_bottom();