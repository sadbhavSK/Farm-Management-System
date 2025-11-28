<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect("localhost:3307", "root", "", "agroculture");
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
