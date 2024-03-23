<?php

// task1.a
$regexpr1 = '/a..b/';
echo "\n";
$str1 = 'ahb acb aeb aeeb adcb axeb';
preg_match_all($regexpr1, $str1, $found1);
print_r($found1);



