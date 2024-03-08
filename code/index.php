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
        echo "\n";
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
    <hr>
    Task 13: <br>
    <?php
        $my_num = 1534145234532452345;
        $answer = $my_num;
        $answer += 2;
        $answer *= 2;
        $answer -= 2;
        $answer /= 2;
        $answer -= $my_num;
        echo $answer;
    ?>
    <hr>
    Task 14: <br>
    <?php
        $a = 10;
        $b = 3;
        echo $a % $b;
        echo "\n";
        if (!($a % $b))
        {
            echo "Делится";
        }
        else 
        {
            echo "Делится c остатком";
        }
        $st = pow(2, 10);
        $sqrt_245 = sqrt(245);
        $array_trtrt = [4, 2, 5, 19, 13, 0, 10];
        $count = 0;
        foreach ($array_trtrt as $el)
        {
            $count += pow($el, 2);
        }
        $sqrt_379 = sqrt(379);
        echo $sqrt_379;
        echo "\n";
        echo round($sqrt_379);
        echo "\n";
        echo round($sqrt_379, 1);
        echo "\n";
        echo round($sqrt_379, 2);
        echo "\n";
        
        $sqrt_587 = sqrt(587);
        $arr_for_sqrt_587 = ["floor" => floor($sqrt_587), "ceil" => ceil($sqrt_587)];

        

    ?>
</body>
</html>

