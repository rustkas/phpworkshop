<?php
for ($i = 0; $i < 10; $i++) {
    if (isset($arr[$i])) {
        echo "<div style='background-color:lightgreen'>Элемент \$arr[$i] существует</div><br />";
    } else {
        echo "<div style='background-color:red'>Элемент \$arr[$i] не существует</div><br />";
    }
}
