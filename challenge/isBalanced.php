<?php

function isBalanced(string $str)
{
    $countOfLBracket = 0;
    $countOfRBracket = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $str[$i] === "(" ? $countOfLBracket++ : $countOfRBracket++;
        if (($str[$i] . $str[$i + 1]) === ")(") {
            return false; 
        }
    }

    if ($countOfLBracket === $countOfRBracket) {
        return true;
    } else {
        return false;
    }    
}

var_dump(isBalanced('(())'));  // true
var_dump(isBalanced('((())')); // false
var_dump(isBalanced('(()())')); // false
var_dump(isBalanced('((((((((((((()))))))))))))')); // true
