<?php

function isHappy($n) {
    $mid = strlen($n) / 2;
    print_r($mid);
    $firstHalf = 0;
    $secondHalf = 0;
    for ($i = 0; $i < $mid; $i++) {
        $firstHalf += $n[$i];
        $secondHalf += $n[$mid+$i];
    }
    if ($firstHalf === $secondHalf) {
        return true;
    } else {
        return false;
    }
}




var_dump(isHappy('385916')); // true
var_dump(isHappy('231002')); // false
var_dump(isHappy('1222')); // false
var_dump(isHappy('054702')); // true
var_dump(isHappy('00')); // true