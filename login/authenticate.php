<?php
session_start();

$username = $_POST['uname'];
$password = $_POST['password'];

// Homwork: username > 3 chars; password "letmein"
if ($username === $password) {
    $_SESSION['user'] = $username;
    header("Location: important.php");
} else { 
    $_SESSION['err'] = "Wrong username and/or password";
    header("Location: index.php");
}