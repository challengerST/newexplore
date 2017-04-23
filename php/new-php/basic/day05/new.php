<?php
error_reporting(2);
$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("welcome.txt"));
// fclose($myfile);
?>