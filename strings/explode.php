<?php
$str = 'Имя, Фамилия, e-mail';
$arr =  explode(',', $str);
for($i=0;$i<count($arr);$i++){
    $arr[$i]= trim($arr[$i]);
}
echo '<pre>';
print_r($arr); // ['Имя', 'Фамилия', 'e-mail']
