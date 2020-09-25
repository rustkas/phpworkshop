<?php
$arr = [
    'fst' => 1,
    'snd' => 2,
    'thd' => 3,
    'fth' => 4
];
$keys = [];
foreach ($arr as $index =>$val) {
    $keys[] = $index;
}
echo ' <pre>';
print_r($keys);
echo '< / pre>';