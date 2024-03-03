<?php

function arrayFill($value, $num) {
    $arr = array();
    for ($i = 0; $i < $num; $i++) {
        array_push($arr, $value);
    }
    return $arr;
}


$curStr = "x";
$strArr = array($curStr);
for ($i = 0; $i < 7; $i++) {
    $curStr .= "x";
    array_push($strArr, $curStr);
}

foreach ($strArr as $str) {
    echo $str, " ";
}
echo "\n";

$fillarr = arrayFill('x', 5);
foreach ($fillarr as $value) {
    echo $value, " ";
}
echo "\n";
$arr2d = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr2d as $arr1d) {
    $sum += array_sum($arr1d);
}
echo $sum, "\n";
$cicleArr = array();
for ($i = 0; $i < 3; $i++) {
    $row = array();
    for ($j = 1; $j < 4; $j++) {
        array_push($row, 3 * $i + $j);
    }
    array_push($cicleArr, $row);
}
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $cicleArr[$i][$j], " ";
    }
    echo "\n";
}
$exprArr = array(2, 5, 3, 9);
$result = $exprArr[0] * $exprArr[1] + $exprArr[2] * $exprArr[3];
echo $result, "\n";
$user = ['name'=>'Ivan', 'surname'=>'Ivanov', 'patronymic'=>'Ivanovich'];
echo $user['surname'] . " " . $user['name'] . " " . $user['patronymic'], "\n";
$date = ['year'=>'2024', 'month'=>'03', 'day'=>'03'];
echo $date['year'] . '-'  . $date['month'] . '-' . $date['day'] . "\n"; 
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "\n";
echo $arr[count($arr) - 1], "\n";
echo $arr[count($arr) - 2], "\n";
