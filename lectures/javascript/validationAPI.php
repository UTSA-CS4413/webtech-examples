<?php
// validationAPI.php
if (!empty($_POST['submit']))
    $serverMessage = "The server received your registration!";

?>

<html lang="en">
<head>
    <link rel='stylesheet' type='text/css' href='forms.css'>
</head>
<body>
<h3>Register</h3>

<p><?php echo isset($serverMessage) ? $serverMessage : "" ?></p>

<ul id="errors" class="error">
</ul>
<form action="" method="post">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username" minlength="5" required/> <br>
    <label for="password1">Password: </label>
    <input type="password" id="password1" name="password1" minlength="5" required/> <br>
    <label for="password2">Confirm Password: </label>
    <input type="password" id="password2" name="password2" required/> <br>
    <label for="dob">Date of Birth: </label>
    <input type="text" id="dob" name="dob"/> <br>
    <input type="submit" name="submit" value="Submit" onclick="validate()"/>
</form>
</body>
</html>