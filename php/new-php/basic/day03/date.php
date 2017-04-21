<?php
echo time();
echo "<br>";
echo "今天是" .date("l") ;
echo "<br>";
echo "今天是" .date("y-m-d");
echo "<br>";
echo "今天是" .date("y/m/d");
echo "<br>";
echo "今天是" .date("y.d.m");
echo "<br>";
// 获取当前时间
date_default_timezone_set("Asia/Shanghai");
echo "现在是" .date("h:i:s:a");
echo "<br>";
//倒计时
$d1=strtotime("Mar 1");
echo "<br>";
$d2=time();
echo "<br>";
echo $d1;
echo "<br>";
echo $d2;
echo "<br>";
$d3=ceil(($d1-$d2)/60/60/24);
echo $d3 . "天数";
?>