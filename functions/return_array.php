<?php
function formatSize($bytes)
{
    $kbytes = $bytes / 1024;
    $mbytes = $kbytes / 1024;
    $gbytes = $mbytes / 1024;
    
    return [$bytes, $kbytes, $mbytes, $gbytes];
}
list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(1024*1024*1024);

echo 'Bytes: ', $bytes, '<br />';
echo 'KBytes: ', $kbytes, '<br />';
echo 'MBytes: ', $mbytes, '<br />';
echo 'GBytes: ', $gbytes, '<br />';
