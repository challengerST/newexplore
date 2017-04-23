<?php
//设置时区
// date_default_timezone_set("Asia/Shanghai");
// echo date(" y-m-d h:i:s");
// echo "<br>";
// print_r($_ENV);
// echo "<br>";
// $str_name="my_name";
// $my_name_1="yt";
// echo $$str_name;
// echo "<br>";
$file=fopen("welcome.txt","r");
echo file_put_contents("welcome.txt","<ul><li>1</li></ul>");
// if(!file_exists("welcome.txt")){
// die("file not found");
// }else{
//     $file=fopen("welcome.txt","r");
//     echo fread($file);
// }
?>