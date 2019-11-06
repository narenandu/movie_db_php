<?php
    //DB info
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedb";

    // Create and check connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        // everything below won't execute and is a good security measure
        die("Connection failed: ". $conn->connect_error);
    }
?>
