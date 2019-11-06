<?php
    include("../store/db.php");

    global $conn;

    //Create sql string
    $sql = "SELECT Title, Genre, Rating FROM movie";

    //send query
    $result = $conn->query($sql);

    //close the DB connection
    $conn->close();
?>
