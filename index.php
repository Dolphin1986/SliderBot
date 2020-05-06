<?php

$debug = file_get_contents('php://input');
$fp = fopen('debug.txt', 'w');
fwrite($fp, $debug);
fclose($fp);

print_r($debug);

?>