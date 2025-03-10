<?php
// TODO: make sure no one can access this page without logging in first

$id = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sql = "SELECT * FROM items where id = '" . $id . "'";

        $brand = "Bogus";
        $product = "Fake";
        $price = 1.99;
        ?>
        <form name="f" action="do_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <label ><?php echo $id; ?></label><br/>
            Brand: <input type="text" name="opponent" value="<?= $brand ?>"><br/>
            Product: <input type="text" name="site" value="<?php echo $product; ?>"><br/>
            Price: <input type="text" name="result" value="<?php echo $price; ?>"><br/>
            <br/>
            <input type="submit" value="Update">
        </form>

    </body>
</html>
