<?php

function fizzBuzz(int $begin, int $end)
{
    for ($i = $begin; $i <= $end; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            print_r("FizzBuzz ");
        } else if ($i % 3 === 0) {
            print_r("Fizz ");
        } else if ($i % 5 === 0) {
            print_r("Buzz ");
        } else {
            print_r($i . " ");
        }
    }
}

fizzBuzz(11, 20);