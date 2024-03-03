<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    Task 1: <br>
    <?php
        $very_bad_unclear_name = "15 chicken wings";

        $order = &$very_bad_unclear_name;

        $order .= " some string";
    
        echo "\nYour order is: $very_bad_unclear_name.";
    ?>
    <hr>
</body>
</html>

