<?php

// task1.a
$regexpr1 = '/a..b/';
echo "\n";
$str1 = 'ahb acb aeb aeeb adcb axeb';
preg_match_all($regexpr1, $str1, $found1);
print_r($found1);

// task1.b
$regexpr2 = '/[0-9][0-9]*/';
$str2 = 'a1b2c3';

function cube($n) {
    return $n[0] * $n[0] * $n[0];
}

echo preg_replace_callback($regexpr2, "cube", $str2), "\n";

