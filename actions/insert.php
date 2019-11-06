<?php header("Location: ../index.php");

    include(__DIR__.'/../store/db.php');

    global $db;
    //variables for each piece of information
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $rating = $_POST["rating"];

    //Create sql string
    $sql = "INSERT INTO movies (title,genre,rating)
            VALUES ('$title', '$genre', '$rating')";

    //send query
    if ($db->query($sql) == TRUE) {
        echo "New record created successfully";
    }
    else {
        "Error: " . $sql . "<br>" . $db->error;
    }

    //close the DB connection
    $db->close();
?>
