<?php

$debug = file_get_contents('https://flowxo.com/hooks/b/a8k2844p');
$fp = fopen('debug.txt', 'w');
fwrite($fp, $debug);
fclose($fp);

print_r($debug);

?>