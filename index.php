<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "start";
echo "<br>";
print(execPrint("git pull https://github.com/tejas-webmavens/test.git master"));

function execPrint($command){
	$result = array();
	exec($command, $result);
	foreach ($result as $line) {
		print($line."\n");
	}
}
?>