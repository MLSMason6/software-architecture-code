<?php session_start();

// define variables and set to empty values
$form_username = $pwd = $repeat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $form_username = test_input($_POST["form_username"]);
  $pwd = test_input($_POST["pwd"]);
  $repeat = test_input($_POST["repeat"]);
}

// TODO: make sure that pwd and repeat match.  If they don't match, send the 
// user back to the form with an appropriate error message.

// TODO: make sure that the new user is not already in the database.  If the
// new username has already been used, send the user back to the form with an 
// appropriate error message.
// HINT: SELECT * FROM users where username = '$form_username'


// TODO: insert the new user into the database
// HINT: INSERT INTO users(username, password) VALUES('$form_username', '$repeat')

// TODO: close the database connection

// if we made it here, we have a new user; send them to the homepage
header("location:index.php");

