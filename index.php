<?php

//changed permission in /etc/sudoers
//change .git directory permission
$username = "";
$password = "";
$branch = "master";
$ripo_path = "https://".$username.":".$password."@github.com/tejas-webmavens/test.git";

error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "====================Started====================";
echo "<br>";
echo shell_exec("git pull ".$ripo_path." ".$branch." 2>&1");
echo "<br>";
echo "====================Completed====================";
?>