<html>
    <body>
        <p><input type="submit" value="RETURN TO FOOD SHOP MENU" name="returnToMenu" onclick="location.href='orderMenu.php'"></p>
    </body>
</html>
<?php 
    // Database connection details
    $host = "localhost"; // Hostname
    $user = "root"; // Username
    $password = ""; // Password
    $dbname = "accounts"; // Database name (should be the correct database name)
    $dsn = "mysql:host={$host};dbname={$dbname}"; // Data Source Name (DSN) for PDO

    // Create a new PDO instance for database connection
    $conn = new PDO($dsn, $user, $password);

    // Set the time zone for the database connection (GMT+8 for Philippines Standard Time)
    $conn->exec("SET time_zone = '+08:00';");
?>