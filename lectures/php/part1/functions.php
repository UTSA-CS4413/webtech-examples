<?php
// functions.php

function html_top($title) {
    return "
<html>
    <head>
        <title>Web Tech Example - $title</title>
    </head>
    <body>
    <h1>$title</h1>";
}

function html_bottom() {
    return "
    </body>
</html>";
}

echo html_top("Functions");
echo "<p>This is in the body.</p>";
echo html_bottom();