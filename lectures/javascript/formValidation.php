<?php
// formValidation.php
if (!empty($_POST['submit']))
    $serverMessage = "The server received your registration!";
?>

<html lang="en">
<head>
    <link rel='stylesheet' type='text/css' href='forms.css'>
    <script type="text/javascript">

        function addError(err){
            let newError = document.createElement("li");
            newError.innerText = err;
            document.getElementById('errors').appendChild(newError);
        }

        function validate() {
            // clear errors list
            document.getElementById('errors').innerHTML = "";
            let valid = true;

            if (document.getElementById('username').value.length < 5) {
                addError("Username must be at least 5 characters");
                valid = false;
            }

            if (document.getElementById('password1').value.length < 5) {
                addError("Password must be at least 5 characters long");
                valid = false;
            }

            if (document.getElementById('password1').value !== document.getElementById('password2').value) {
                addError("Passwords must match");
                valid = false;
            }

            let dobRE = /\d{1,2}-\d{1,2}-\d{4}/;
            if (!document.getElementById('dob').value.match(dobRE)) {
                addError('Date of birth must be of form DD-MM-YYYY');
                valid = false;
            }

            return valid;
        }

    </script>
</head>
<body>
<h3>Register</h3>

<p><?php echo isset($serverMessage) ? $serverMessage : "" ?></p>

<ul id="errors" class="error"></ul>

<form action="" method="post" onsubmit="return validate()">
    <label for="username">Username: </label>
    <input type="text" id="username" name="username"/> <br>
    <label for="password1">Password: </label>
    <input type="password" id="password1" name="password1"/> <br>
    <label for="password2">Confirm Password: </label>
    <input type="password" id="password2" name="password2"/> <br>
    <label for="dob">Date of Birth: </label>
    <input type="text" id="dob" name="dob"/> <br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>