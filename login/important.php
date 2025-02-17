<?php 
session_start();

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else { 
    header("Location: index.php");
    exit;
}




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome, <?= $username ?>!
        <p>If you can access this page through the login form only, 
            then you have most likely demonstrated your knowledge of 
            these key topics:</p>
        <ol>
            <li>How to troubleshoot/debug form data.</li>
            <li>The difference between the various form data superglobals.</li>
            <li>How to properly process form data.</li>
            <li>How to direct the client to the proper page, based on input.</li>
            <li>How to use the session superglobal.</li>
            <li>How to protect a page from prying eyes.</li>
        </ol>
    </body>
</html>
