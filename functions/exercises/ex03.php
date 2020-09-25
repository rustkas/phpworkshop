<?php
function sum(... $items):int{
    $sum = 0;
    foreach($items as $v){
        $sum += $v;
    }
    return $sum;
}

echo sum(2,2,2);