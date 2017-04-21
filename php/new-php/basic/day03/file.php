<?php
$myfile=fopen('dat.php','r') or die('无法打开!');
echo fread($myfile,filesize('dat.php'));//输出无法打开
fclose($myfile);
// $myfile = fopen("dat.php", "r") or die("打不开!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);
?>
<!--//只能存在一个-->
<?php
$myfile1=fopen('date.php','r') or die('无法打开!');
echo fread($myfile1,filesize('date.php'));//输出文件内容
fclose($myfile1);
?>