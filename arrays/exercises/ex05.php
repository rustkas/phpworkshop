<?php
$array_size = mt_rand(5, 10);
$arr =[];
for ($i = 0; $i < $array_size; $i++) {
    $arr[$i] = mt_rand(0, 100);
}
asort($arr);

echo ' <pre>';
print_r($arr);
echo '< / pre>';