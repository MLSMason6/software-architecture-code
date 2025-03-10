<?php session_start();
// TODO: make sure no one can access this page without logging in first
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        Enter the ID of the item to update.
        <form action="display_for_update.php" method="post">
            ID: <input type="text" name="id" />
            <input type="submit" />
        </form>
    </body>
</html>
