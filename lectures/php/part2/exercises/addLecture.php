<?php
// addLecture.php

include_once "templateFunctions.php";

if (true) { // TODO change condition
    html_top("Error - No Data!");
} else {
    html_top($_POST['lecture_name']);
    //  TODO print description

    // TODO print a sentence about the week and difficulty

    if (true) // TODO change condition
        echo "<p>This lecture has an assignment.</p>";
}
