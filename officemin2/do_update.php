<?php session_start();
// TODO: make sure no one can access this page without logging in first

// TODO: validate the input data and place each value into the appropriate
// variable so that the UPDATE below will work properly

$brand = "Bogus";
$product = "Fake";
$price = 1.99;

$sql = "UPDATE items SET brand='$brand', product='$product', price=$price WHERE id=$id";

header("location:index.php");

