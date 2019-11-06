<?php
    include(__DIR__.'/../store/db.php');

    global $db;

    //Create sql string
    $sql = "SELECT Title, Genre, Rating FROM movies";

    //send query
    $result = $db->query($sql);

    //close the DB dbection
    $db->close();
?>
