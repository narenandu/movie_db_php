<?php
    include(__DIR__."/../actions/fetch.php");

    global $result;
    if (empty($result)) {
        printf("There are no movies fetched from DB");
    }

    $list = "<table>";
    $list .= "<tr align='center'>";
        $list .= "<th> Title </th>";
        $list .= "<th> Genre </th>";
        $list .= "<th> Rating </th>";
    $list .= "</tr>";
    while ($obj = $result->fetch_object()) {
        $list .= "<tr>";
        $list .= "<td>" . $obj->Title ."</td>";
        $list .= "<td>" . $obj->Genre ."</td>";
        $list .= "<td>" . $obj->Rating ."</td>";
        $list .= "</tr>";
    }
    $list .= "</table>";

    $result->close();
?>
