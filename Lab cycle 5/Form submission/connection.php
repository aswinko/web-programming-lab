<?php 
    $hostname = "localhost";
    $username = "23mca023";
    $password = 2737;
    $dbname = "23mca023";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn -> connect_errno) {
        echo "Error while connecting!." . $conn->connect_error;
        exit();
    }

?>