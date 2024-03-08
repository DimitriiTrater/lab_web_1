<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="favicon_io/favicon.ico" type="image/x-icon"/>
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
    Task 2: <br>
    <?php
        $any_name_int = 9;
        echo $any_name_int;
        echo '\n';
        $any_name_float = 9.23;
        echo $any_name_float;
        echo 12;
        $last_month = 1089.98;
        $this_month = 1187.23;
        echo $last_month - $this_month;
    ?>
    <hr>
    Task 11: <br>
    <?php
        $num_languages = 4;
        $months = 11;
        $days = $months * 16;
        $days_per_language = $days / $num_languages;
        echo $days_per_language;
    ?>
    <hr>
    Task 12: <br>
    <?php
        echo 8**2;
    ?>
</body>
</html>

