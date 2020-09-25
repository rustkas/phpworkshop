<?php
$x = 2;
$y=3;
echo $x, ' ', $y, '<br />';

$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
echo $x, ' ', $y, '<br />';

$x ^= $y ^= $x ^= $y;
echo $x, ' ', $y, '<br />';
