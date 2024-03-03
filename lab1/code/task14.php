<?php
$a = 10;
$b = 3;
echo $a % $b, "\n";
if ($a % $b == 0) {
    echo "Делится ", $a / $b;
} else {
    echo "Делится с остатком ", $a % $b, "\n";
}
$st = pow(2, 10);
echo $st, "\n";
echo 'sqrt from 245 is ', sqrt(245), "\n";
$array = array(4, 2, 5, 19, 13, 0, 10);
$sum_sq = 0;
foreach ($array as $elem) {
    $sum_sq += $elem**2;
}
echo sqrt($sum_sq), "\n";
echo "sqrt from 379:\n";
echo round(sqrt(379), 0), "\n";
echo round(sqrt(379), 1), "\n";
echo round(sqrt(379), 2), "\n";
echo "sqrt from 587:\n";
$floor = floor(sqrt(587));
$ceil = ceil(sqrt(587));
$assoc_array = array('floor'=>$floor, 'ceil'=>$ceil);
echo "floor: ", $assoc_array['floor'], ", ceil: ", $assoc_array['ceil'], "\n";
$minmaxarray = array(4, -2, 5, 19, -130, 0, 10);
echo "min: ", min($minmaxarray), ", max ", max($minmaxarray), "\n";
echo "Random number: ", rand(1, 100), "\n";
$rand_array = array();
for ($i = 0; $i < 10; $i++) {
    array_push($rand_array, rand(1, 100));
}
echo "Random array:\n";
for ($i = 0; $i < 10; $i++) {
    echo $rand_array[$i], " ";
}
echo "\n";
$a = (float)readline("Input first number to abs diff: ");
$b = (float)readline("Input second number to abs diff: ");
echo "Abs: ", abs($a - $b), "\n";
$signed_array = array(1, 2, -1, -2, 3, -3);
$unsigned_array = array();
for ($i = 0; $i < count($signed_array); $i++) {
    array_push($unsigned_array, abs($signed_array[$i]));
}
echo "Unsigned array:\n";
for ($i = 0; $i < count($unsigned_array); $i++) {
	echo $unsigned_array[$i], " ";
}
echo "\n";
$num = (int)(readline("Input number to find devides: "));
$deviders = array();
for ($i = 1; $i < sqrt($num); $i++) {
    if ($num % $i == 0) {
        array_push($deviders, $i, $num / $i);
    }
}
if (ceil(sqrt($num)) * ceil(sqrt($num)) == $num) {
    array_push($deviders, sqrt($num));
}
echo "Deviders of ", $num, ":\n";
for ($i = 0; $i < count($deviders); $i++) {
    echo $deviders[$i], " ";
}
echo "\n";
$cur_sum = 0;
$sum_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
for ($i = 0; $i < count($sum_array); $i++) {
    $cur_sum += $sum_array[$i];
    if ($cur_sum > 10) {
	echo "Need first ", $i + 1, "\n";
        break;
    }	
}
