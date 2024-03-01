<?php

function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

function cut($str, $first=10) {
    return substr($str, 0, $first);
}

function printArray($array, $index=0) {
    echo $array[$index], " ";
    if ($index + 1 < count($array)) {
        printArray($array, $index + 1);
    } 
}

function numSum($num) {
    $temp = $num;
    $numsum = 0;
    while ($temp > 0) {
        $numsum += $temp % 10;
	$temp = intdiv($temp, 10);
    }
    if ($numsum < 10)  {
        return $numsum;
    } else {
        return numSum($numsum);
    }
}


echo increaseEnthusiasm("Hooray!!"), "\n";
echo repeatThreeTimes("aba"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("aba")), "\n";
echo cut("dajkdasjdsk"), "\n";
echo cut("dajkdasjdsk", 3), "\n";
$array = array(1, 2, 3, 4, 5, 6);
printArray($array);
echo "\n";
$num = (int)(readline());
echo numSum($num), "\n";
