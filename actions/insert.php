<?php header("Location: ../index.php");
    include("../store/db.php");

    global $conn;
    //variables for each piece of information
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $rating = $_POST["rating"];

    //Create sql string
    $sql = "INSERT INTO movie (title,genre,rating)
            VALUES ('$title', '$genre', '$rating')";

    //send query
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    }
    else {
        "Error: " . $sql . "<br>" . $conn->error;
    }

    //close the DB connection
    $conn->close();
?>
