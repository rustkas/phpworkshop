<?php
echo intval(42);echo '<br/>';                      // 42
echo intval(4.2);echo '<br/>';                     // 4
echo intval('42');echo '<br/>';                    // 42
echo intval('+42');echo '<br/>';                   // 42
echo intval('-42');echo '<br/>';                   // -42
echo intval(042);echo '<br/>';                     // 34
echo intval('042');echo '<br/>';                   // 42
echo intval(1e10);echo '<br/>';                    // 2147483647
echo intval('1e10');echo '<br/>';                  // 1
echo intval(0x1A);echo '<br/>';                    // 26
echo intval(42000000);echo '<br/>';                // 42000000
echo intval(420000000000000000000);echo '<br/>';   // -4275113695319687168
echo intval('420000000000000000000');echo '<br/>'; // 9223372036854775807
echo intval(42, 8);echo '<br/>';                   // 42
echo intval('42', 8);echo '<br/>';                 // 34
