<?php

$numArr = [3, 2, 5, 6, 7, 9];
echo "Mean: ", array_sum($numArr) / count($numArr), "\n";
$rangeArr = range(1, 100);
echo "Sum from 1 to 100: ", array_sum($rangeArr), "\n";
$toSqrtArray = [1, 4, 9, 16, 25];
$sqrtArray = array_map('sqrt', $toSqrtArray);
foreach ($sqrtArray as $sqrt) {
    echo $sqrt, " ";
}
echo "\n";
$mapArray = array_combine(range('a', 'z'), range(1, 26));

$str = '1234567890';
$pairs = str_split($str, 2);
echo "SUm of pairs: ", array_sum($pairs), "\n";
