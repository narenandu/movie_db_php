<!DOCTYPE html>
<html>

<head>
    <title>Movie DB</title>
</head>

<body>

    <?php
        include(__DIR__."/./ui/form.php");
        include(__DIR__."/./ui/list.php");
        include(__DIR__."/./actions/fetch.php");

        global $form;
        global $list;

        print $form;
        print "<hr>";
        print $list;
    ?>

</body>

</html>
