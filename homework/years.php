<?php 
session_start();
$_SESSION['save'] = $_POST['is'];
$_SESSION['interest'] = $_POST['ir'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Years</title>
</head>

<body>
    
    <p>Your savings are: </p>
    <ul>
        <li><?=$_SESSION['save'] ?></li>
    </ul>
    
    <p>Your interest rate is: </p>
    <ul>
        <li><?=$_SESSION['interest'] ?></li>
    </ul>

<form method="post" action="final.php">
    <p>
        <label for="y">Years:</label>
        <input type="number" name="y" id="y">
    </p>
    <p>
        <input type="submit" name="next" value="Next &gt;">
    </p>
</form>
</body>
</html>
