<!DOCTYPE html>
<html>

<head>
    <title>DB with HTML form</title>
</head>

<body>
    <form action="./actions/insert.php" method="POST">
        <label for="title">Title:</label>
        <input id="title" type="text" name="title">
        <label for="genre">Genre:</label>
        <input id="genre" type="text" name="genre">
        <label for="rating">Rating:</label>
        <input id="rating" type="text" name="rating">
        <button type="submit">Submit</button>
    </form>

    <?php
        include("./store/db.php");
        include("./actions/fetch.php");

        global $result;
        if (empty($result)) {
            printf("There are no movies fetched from DB");
        }

        echo "<table>";
        echo "<tr align='center'>";
            echo "<th> Title </th>";
            echo "<th> Genre </th>";
            echo "<th> Rating </th>";
        echo "</tr>";
        while ($obj = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $obj->Title ."</td>";
            echo "<td>" . $obj->Genre ."</td>";
            echo "<td>" . $obj->Rating ."</td>";
            echo "</tr>";
        }
        echo "</table>";
        /* free result set */
        $result->close();

    ?>
</body>

</html>
