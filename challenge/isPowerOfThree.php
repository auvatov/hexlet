<?php

function isPowerOfThree (int $n)
{
    for ($n; $n >= 1;) {
        if ($n === 1) {
            return true;
        } else if ($n % 3 === 0) {
            $n /= 3;
        } else {
            return false;
        }
    }
}



var_dump(isPowerOfThree(1)); // → true (3^0)
var_dump(isPowerOfThree(3)); // → true
var_dump(isPowerOfThree(4)); // → false
var_dump(isPowerOfThree(9)); // → true