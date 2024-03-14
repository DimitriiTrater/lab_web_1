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
Task 1: <br />
<?php
$veryBadUnclearName = "15 chicken wings";
$order = &$veryBadUnclearName;
$order .= " some string";
echo "\nYour order is: $veryBadUnclearName.";
?>
<hr>
Task 2: <br />
<?php
$anyNameInt = 9;
echo $anyNameInt;
echo "\n";
$anyNameFloat = 10.5;
echo $anyNameFloat;
echo $anyNameFloat + $anyNameFloat - $anyNameInt;
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo $lastMonth - $thisMonth;
?>
<hr>
Task 11: <br />
<?php
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;
?>
<hr>
Task 12: <br />
<?php
echo 8 ** 2;
?>
<hr>
Task 13: <br />
<?php
$myNum = 1534145234532452345;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer;
?>
<hr>
Task 14: <br />
<?php
$a = 10;
$b = 3;
echo "Остаток от деления $a на $b равен " . $a % $b;
echo "\n";
echo !($a % $b) ? "Делится \n" : "Делится c остатком \n"; 
$st = pow(2, 10);
$sqrt_245 = sqrt(245);
$arrayTRTR = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arrayTRTR as $el) {
    $count += pow($el, 2);
}
$sqrt379 = sqrt(379);
echo $sqrt379;
echo "\n";
echo round($sqrt379);
echo "\n";
echo round($sqrt379, 1);
echo "\n";
echo round($sqrt379, 2);
echo "\n";

$sqrt587 = sqrt(587);
$arrForSqrt587 = ["floor" => floor($sqrt587), "ceil" => ceil($sqrt587)];

echo min(4, -2, 5, 19, -130, 0, 10);
echo "\n";
echo max(4, -2, 5, 19, -130, 0, 10);

echo rand(1, 100);
$arrayWithRandomNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $arrayWithRandomNumbers[$i] = rand();
}

$a = rand();
$b = rand();
$aBSubAbs = abs($a - $b);

$absArr = array_map("abs", [1, 2, -1, -2, 3, -3]);

$num = rand();
$dividers = [];
for ($i = 1; $i < $num; $i++) {
    if (!($num % $i)) {
        $dividers[] = $i;
    }
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$res = 0;
foreach ($arr as $el) {
    if (10 < $sum) break;
    $sum += $el;
    $res++;
}
?>
<hr>
Task 15: <br />
<?php
function printStringReturnNumber(): int
{
    echo "<br />any_str";
    return 1;
}

$myNum = printStringReturnNumber();
echo $myNum;
?>
<hr>
Task 16: <br />
<?php
function increaseEnthusiasm(string $str): string
{
    return $str . "!";
}

echo "<br />";
echo increaseEnthusiasm("any_str");
function repeatThreeTimes(string $str): string
{
    return $str . $str . $str;
}

echo "<br />";
echo repeatThreeTimes("any_str");
echo "<br />";
echo increaseEnthusiasm(repeatThreeTimes("any_str"));
function cut(string $str, int $len = 10): string
{
    return substr($str, 0, $len);
}

echo "<br />";
$arrFroRec = [1, 2, 3, 4, 5, 6];
function print_array(array $array): void
{
    if (!count($array)) return;
    echo $array[0] . " ";
    $tempArr = array_slice($array, 1, count($array));
    print_array($tempArr);
}

print_array($arrFroRec);

function sum(int $num): int
{
    if (1 === strlen(strval($num))) return $num;
    $str_num = str_split(strval($num));
    $nums = [];
    foreach ($str_num as $i) {
        $nums[] = (int) $i;
    }
    if (9 < array_sum($nums)) {
        sum(array_sum($nums));
    }
    return array_sum($nums);
}

?>
<hr>
Task 17: <br />
<?php
$arr = ['x', 'xx', 'xxx'];
function arrayFill(string $val, int $len): array
{
    $res = [];
    for ($i = 0; $i < $len; $i++) {
        $res[] = $val;
    }
    return $res;
}

$sum = 0;
$arr2d = [[1, 2, 3], [4, 5], [6]];
foreach ($arr2d as $array) {
    foreach ($array as $el) {
        $sum += $el;
    }
}
$number = 1;
$createdArr = [[]];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $createdArr[$i][$j] = $number;
        $number++;
    }
}

$msiv = [2, 5, 3, 9];
$result = $msiv[0] * $msiv[1] + $msiv[2] * $msiv[3];
echo "<br />" . $result . "<br />";

$user = ['name' => "Dimitrii", 'surname' => "Trater", 'patronymic' => "nat_movert"];
echo "<br />" . $user['name'] . " " . $user['surname'] . " " . $user['patronymic'] . "<br />";
$date = ['year' => 2024, 'month' => 3, 'day' => 8];
echo '<br />' . $date['year'] . "-" . $date['month'] . "-" . $date['day'] . '<br />';

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br />" . count($arr);
echo "<br />" . $arr[count($arr) - 1];
echo "<br />" . $arr[count($arr) - 2];
?>
<hr>
Task 18: <br />
<?php
function isGreaterThan10(float $a, float $b): bool
{
    return 10 < ($a + $b);
}

function isEqual(float $a, float $b): bool
{
    return ($a === $b);
}

echo "<br />";
$test = 1;
echo !$test ? "верно" : "";

$age = 22;
if (10 > $age || 99 < $age) {
    echo "age < 10 or age > 99";
} else {
    $sum = 0;
    $temp = str_split(strval($age));
    foreach ($temp as $value) {
        $sum += (int) $value;
    }
    echo $sum > 9 ? "Двузначна" : "Однозначна";
}
$arr = [1, 2, 3];
echo "<br />";
echo 3 === count($arr) ? count($arr) : "";
?>
<hr>
Task 19: <br />
<?php
echo "<br />";
for ($i = 1; $i < 21; $i++) {
    echo str_repeat("x", $i);
    echo "<br />";
}
?>
<hr>
Task 20: <br />
<?php
echo "<br />";
$arrayWithNums = [1, 2, 3];
echo array_sum($arrayWithNums) / count($arrayWithNums);
echo "<br />";
echo 100 * (1 + 100) / 2;
$arrayWithNums = [4, 9, 16];
$arrayWithRoots = array_map("sqrt", $arrayWithNums);
echo "<br />";
print_array($arrayWithRoots);
echo "<br />";
$arrayLetternNum = array_combine(range("a", "z"), range(1, 26));
$strWithNums = "1234567890";
echo array_sum(str_split($strWithNums, 2));
?>
</body>
</html>