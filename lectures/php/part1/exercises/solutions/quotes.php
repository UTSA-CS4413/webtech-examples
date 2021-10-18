<?php
// quotes.php

include_once "templateFunctions.php";
html_top("Quotes Exercise");

$time = date("h:i:s A");

echo "<p>The time is <strong>$time</strong></p>";
echo '<p>The variable name is <strong>$time</strong></p>';
echo "<p>Today's date is <strong>\"$time\"</strong></p>";

html_bottom();
