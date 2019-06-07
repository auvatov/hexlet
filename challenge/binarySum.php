<?php

function binarySum($a, $b)
{
    print_r(decbin(bindec($a) + bindec($b)) . " ");
}

binarySum('10', '1'); // 11
binarySum('1101', '101'); // 10010