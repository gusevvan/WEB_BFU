<?php

function isSumHigherTen($num1, $num2) {
    return $num1 + $num2 > 10;
}

function isEqual($num1, $num2) {
    return $num1 == $num2;
}


echo isSumHigherTen(3, 10), "\n";
echo isEqual(1, 1), "\n";
$test = 0;
echo ($test == 0 ? "верно\n": "");
$age = 87;
if (10 <= $age and $age <= 99) {
    $sum = ($age % 10) + intdiv($age, 10);
    echo $sum, "\n";
    if ($sum <= 9) {
        echo "Сумма цифр однозначна\n";
    } else {
        echo "Сумма цифр двузначна\n";
    }
} else {
    echo "Число не попадает в диапозон\n";
}
$arr = array(5, 6, 7);
if (count($arr) == 3) {
    echo $arr[0] + $arr[1] + $arr[2], "\n";
} else {
    echo "В массиве не 3 элемента\n";
}
