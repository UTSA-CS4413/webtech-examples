<?php
// break.php

include_once "templateFunctions.php";
html_top("Random Until Zero");

echo "<ul>";
while (true) {
    $random = rand(-10, 10);
    echo "<li>$random</li>";
    if (!$random)
        break;
}
echo "</ul>";

html_bottom();
