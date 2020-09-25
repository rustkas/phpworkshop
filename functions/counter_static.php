<?php
function counter()
{
    static $counter = 0;
    return ++$counter;
}
echo counter(), '<br />';
echo counter(), '<br />';
echo counter(), '<br />';
