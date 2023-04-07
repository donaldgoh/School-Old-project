<?php
    $dbServername =  "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "violecar";
    #connect to server
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    #check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>