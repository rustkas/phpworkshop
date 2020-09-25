<?php
$arr = ['fst', 'snd', 'thd' , 'fth'];
$last_index = count($arr)-1;
$index = mt_rand(0, $last_index);
echo 'Random value is ' . "\"$arr[$index]\""; 