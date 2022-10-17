<?php
// dice.php

include_once "templateFunctions.php";

html_top("Dice Roller");

// validate

// print errors if they exist

?>
<form action="dice.php" method="post">
    <label for="die">Type of die:</label>
<!--    select a type of die-->
    <input type="submit" value="Roll!">
</form>

<?php
html_bottom();
