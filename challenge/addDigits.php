<?php

function addDigits($n) 
{

$numlength = strlen((string)$n);
$result = $n;
while ($numlength > 1) {
    $result = 0;
    for ($i = 0; $i < $numlength; $i++) {

        $result = $result + (int)(((string)$n)[$i]);
    }
   $numlength = strlen((string)$result);
   $n = $result;

}
return $result;

}



var_dump(addDigits(0)); // 0
var_dump(addDigits(1)); // 1
var_dump(addDigits(9)); // 9
var_dump(addDigits(10)); // 1
var_dump(addDigits(38)); // 2