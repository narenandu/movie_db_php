<?php
    //DB info
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedb";

    // Create and check connection
    $db = new mysqli($servername, $username, $password, $dbname);
    if ($db->connect_error){
        // everything below won't execute and is a good security measure
        die("Connection failed: ". $db->connect_error);
    }
?>
