
<html>
    <body>
        <?php
        if (isset($_COOKIE["user"])) {
            echo "Welcome back " . $_COOKIE["user"] . "! <br/>";
        } else {
        ?>
        <form action="welcome.php" method="post">
            Name: <input type="text" name="name" /><br>
            Password: <input type="password" name="pwd" /><br>
            Remember Me: <input type="checkbox" name="remember" value="ON" /><br>
            <input type="submit" />
        </form>
        <?php 
        } 
        ?>

    </body>
</html>