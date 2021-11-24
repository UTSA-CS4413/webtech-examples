<!-- ajax.php -->
<html lang="en">
<head>
    <script type="text/javascript">
        function makeRequest(id){
            let xhr = new XMLHttpRequest();

            // handle response
            xhr.onreadystatechange = function(){
                if (this.readyState === 4) {
                    document.getElementById(id).innerText = this.responseText;
                }
            };

            // make the request
            xhr.open("GET", "time.php", true);
            xhr.send();

        }

        let time = 1;
        function timer(){
             setTimeout(function(){
                 document.getElementById('timer').innerText = time++;
                 timer();
                 }, 1000);
        }

    </script>
</head>
<body onload="timer()">
<h3>AJAX Requests</h3>

<?php
echo "<p>This page was loaded at " . date("h:i:sa") . " (generated on server during initial request).</p>";
?>
<p>Time since page load: <span id="timer">0</span> seconds</p>

<div>
    <p id="box1">Button has not been clicked.</p>
    <button type="button" onclick="makeRequest('box1')">Make Request</button>
</div>

<div>
    <p id="box2">Button has not been clicked.</p>
    <button type="button" onclick="makeRequest('box2')">Make Request</button>
</div>

</body>
</html>