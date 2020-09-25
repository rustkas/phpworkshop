<?php
function getSum($left = 10, $right = 5)
{
    $sum = $left + $right;
    return $sum;
}
echo getSum(), '<br />';     // выводит 15
echo getSum(5), '<br />';    // выводит 10
echo getSum(5, 0), '<br />'; // выводит 5
