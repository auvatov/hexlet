<?php

function fib(int $n)
{   $a = 0;
    $b = 1;
    $c = 1;
    if ($n === 0) {
        return $a;
    } else if ($n === 1) {
        return $b;
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }
    return $c;
}

var_dump(fib(0));
var_dump(fib(1));
var_dump(fib(2));
var_dump(fib(3));
var_dump(fib(4));
var_dump(fib(5));
var_dump(fib(10));







