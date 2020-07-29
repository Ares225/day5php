<?php

$filename ='naam.txt';
$handle = fopen($filename, 'r');

$datain = fread($handle, filesize($filename));
$names_array = explode('s', $datain);

echo $names_array[0];

?>
