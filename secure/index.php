<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "secure";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT password FROM users where username = 'admin'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "hash: " . $row["password"] . "<br>";
                $db_password = $row["password"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        
        echo "<br> call password_hash<br>";
        $hash = password_hash("pwd", PASSWORD_DEFAULT);
        echo "result is $hash";
        
        echo "<br> call password_verify<br>";
        $valid = password_verify("pwd", $db_password);
        echo "valid is $valid";
        
        // register page 
        // with username, password, repeat
        // insert what they type into the database, but make it HASH 
        // call password_hash($repeat. PASSWORD_DEFAULT)
        // INSERT username $valid into the database
        // then allow them to type in their username return their hash password 
        
        
        if ($valid) { 
            $_SESSION['user'] = $username;
        }
        ?>
    </body>
</html>
