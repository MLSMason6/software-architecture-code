<?php 
session_start();
$_SESSION['addy'] = $_POST['address'];
$_SESSION['town'] = $_POST['city'];
$_SESSION['nation'] = $_POST['country']
        
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Multiple form 4</title>
    </head>

    <body>
        <p>The details submitted were as follows: </p>
        <ul>
            <li><?=$_SESSION['fn'] ?></li>
            <li><?=$_SESSION['ln'] ?></li>
            <li><?=$_SESSION['a'] ?></li>
            <li><?=$_SESSION['addy'] ?></li>
            <li><?=$_SESSION['town'] ?></li>
            <li><?=$_SESSION['nation'] ?></li>
        </ul>
    </body>
</html>
