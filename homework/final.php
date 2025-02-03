<?php
session_start();
$_SESSION['year'] = $_POST['y'];
// $_SESSION['total'] = $_SESSION['save'] +( $_SESSION['save'] * $_SESSION['interest']);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Final</title>
    </head>

    <body>
        <p>The details submitted were as follows: </p>
        <?php
        $_SESSION['total'] = $_SESSION['save'] +( $_SESSION['save'] * $_SESSION['interest']);
        $total = $_SESSION['total'] ;
        // $years = $_SESSION['year'];
        $interest = $_SESSION['interest'] * 0.01;
        
        // $total = $_SESSION['total'];
        for ($x = 1; $x <= $_SESSION['year']; $x++) {
            
             $end = $total + ($total * $interest);
             $total = $end;
            echo "Year $x: $end   <br>" ;
        }
        ?>
    </body>
</html>
