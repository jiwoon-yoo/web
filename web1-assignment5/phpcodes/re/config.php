<?php
    // connect to the database
    $host = 'localhost';        // database server name
    $user = 'yoojiw_user1';      // your database username
    $pswd = 'user1user1user1';      // your database password
    $dbName = 'yoojiw_practice';                    // database name

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn))
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>