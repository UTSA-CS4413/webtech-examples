<?php
// templateFunctions.php

function html_top($title) {
    echo "
<html>
    <head>
        <title>Web Tech Example - $title</title>
    </head>
    <body>
    <h1>$title</h1>";
}

function html_bottom() {
    echo "
    </body>
</html>";
}
