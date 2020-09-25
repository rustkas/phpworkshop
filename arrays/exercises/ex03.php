<?php
$arr = ['fst' , 'snd', 'thd' , 'fth' , 'snd', 'thd'];
$tmp_keys = [];
foreach ($arr as $val) {
    $tmp_keys[$val] = $val;
}
$new_array = [];
foreach ($tmp_keys as $val) {
    $new_array[] = $val;
}
echo ' <pre>';
print_r($new_array);
echo '< / pre>';