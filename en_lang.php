<?php
$file_handle = fopen($_SERVER['SCRIPT_FILENAME'], "r") or die ("не удалось открыть файл " . $_SERVER['SCRIPT_FILENAME']);
while (!feof($file_handle)){
	$line = fgets($file_handle);
	echo $line;
}
?>
