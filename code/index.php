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

        echo min(4, -2, 5, 19, -130, 0, 10);
        echo "\n";
        echo max(4, -2, 5, 19, -130, 0, 10);

        echo rand(1, 100);
        $array_with_random_numbers = [];
        for ($i=0; $i < 10; $i++) { 
            $array_with_random_numbers[$i] = rand();
        }

        $a = rand();
        $b = rand();
        $a_b_sub_abs = abs($a - $b);

        $abs_arr = array_map("abs", [1, 2, -1, -2, 3, -3]);

        $num = rand();
        $dividers = [];
        for ($i = 1; $i < $num; $i++)
        {
            if (!($num % $i))
            {
                $dividers[] = $i;
            }
        }
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $sum = 0;
        $res = 0;
        foreach ($arr as $el)
        {
            if ($sum > 10) break;
            $sum += $el;
            $res++;
        }
    ?>
    <hr>
    Task 15: <br>
    <?php
        function printStringReturnNumber()
        {
            echo "<br>any_str";
            return 1;
        }
        $my_num = printStringReturnNumber();
        echo $my_num;
    ?>
    <hr>
    Task 16: <br>
    <?php
        function increaseEnthusiasm($str)
        {
            return $str . "!";
        }
        echo "<br>";
        echo increaseEnthusiasm("any_str");
        function repeatThreeTimes($str)
        {
            return $str . $str . $str;
        }
        echo "<br>";
        echo repeatThreeTimes("any_str");
        echo "<br>";
        echo increaseEnthusiasm(repeatThreeTimes("any_str"));
        function cut($str, $len=10)
        {
            return substr($str, 0, $len);
        }
        echo "<br>";
        $arr_fro_rec = [1, 2, 3, 4, 5, 6];
        function print_array($array)
        {
            if (!count($array)) return;
            echo $array[0] . " ";
            $temp_arr = array_slice($array, 1, count($array));
            return print_array($temp_arr);
        }
        print_array($arr_fro_rec);

        function sum($num)
        {
            if (strlen(strval($num)) == 1) return $num;
            $str_num = str_split(strval($num));
            $nums = [];
            foreach ($str_num as $i)
            {
                $nums[] = intval($i);
            }
            if (array_sum($nums) > 9)
            {
                sum(array_sum($nums));
            }
            return array_sum($nums);
        }
    ?>
    <hr>
    Task 17: <br>
    <?php
        $arr = ['x', 'xx', 'xxx'];
        function arrayFill($val, $len)
        {
            $res = [];
            for ($i = 0; $i < $len; $i++)
            {
                $res[] = $val;
            }
        }

        $sum = 0;
        $arr2d = [[1, 2, 3], [4, 5], [6]];
        foreach ($arr2d as $array)
        {
            foreach ($array as $el)
            {
                $sum += $el;
            }
        }
        $number = 1;
        $created_arr = [[]];

        for ( $i = 0; $i < 3; $i++)
        {
            for ($j = 0; $j < 3; $j++)
            { 
                $created_arr[$i][$j] = $number;
                $number++;
            }
        }

        $msiv = [2, 5, 3, 9];
        $result = $msiv[0] * $msiv[1] + $msiv[2] * $msiv[3];
        echo "<br>" . $result ."<br>";

        $user = ['name' => "Dimitrii", 'surname' => "Trater", 'patronymic' => "nat_movert"];
        echo "<br>" . $user['name'] . " " . $user['surname'] . " " . $user['patronymic'] . "<br>";
        $date = ['year' => 2024, 'month' => 3, 'day' => 8];
        echo '<br>'. $date['year'] . "-" . $date['month'] . "-" . $date['day'] . '<br>';
    
        $arr = ['a', 'b', 'c', 'd', 'e'];
        echo "<br>" . count($arr);
        echo "<br>" . $arr[count($arr)-1];
        echo "<br>" . $arr[count($arr)-2];
        ?>
        <hr>
        Task 18: <br>
        <?php
            function isGreaterThan10($a, $b)
            {
                return ($a + $b) > 10;
            }
            function isEqual($a, $b)
            {
                return ($a == $b);
            }
            echo "<br>";
            $test = 1;
            echo !$test ? "верно" : "";

            $age = 22;
            if ($age < 10 || $age > 99) 
            {
                echo "age < 10 or age > 99";
            }
            else
            {
                $sum = 0;
                $temp = str_split(strval($age));
                foreach ($temp as $value)
                {
                    $sum += intval($value);
                }
                echo $sum > 9 ? "Двузначна" : "Однозначна";
            }
            $arr = [1, 2, 3];
            echo "<br>";
            echo count($arr) == 3 ? count($arr) : "";
        ?>
        <hr>
        Task 19: <br>
        <?php
            echo "<br>";
            for ( $i = 0; $i < 20; $i++ )
            {
                echo str_repeat("x", $i);
                echo "<br>";
            }
        ?>
        <hr>
        Task 20: <br>
        <?php
            echo "<br>";
            $array_with_nums = [1,2,3];
            echo array_sum($array_with_nums)/count($array_with_nums);
            echo "<br>";
            echo 100*(1 + 100)/2;
            $array_with_nums = [4, 9, 16];
            $array_with_roots = array_map("sqrt", $array_with_nums);
            echo "<br>";
            print_array($array_with_roots);
            echo "<br>";
            $array_lettern_num = array_combine(range("a", "z"), range(1, 26));
            $str_with_nums = "1234567890";
            echo array_sum(str_split($str_with_nums, 2));
        ?>
</body>
</html>

