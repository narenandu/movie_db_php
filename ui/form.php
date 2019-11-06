<?php
    $fields = ["title", "genre", "rating"];

    $form = "<form action='./actions/insert.php' method='POST'>";

    for($i=0; $i<count($fields); $i++){
        $field = $fields[$i];
        $form .= "\n<label for='".$field."'>".ucfirst($field).":</label>";
        $form .= "\n<input id='".$field."' type='text' name='".$field."'>";
    }

    $form .= "\n   <button type='submit'>Submit</button>";
    $form .= "</form>";
?>
