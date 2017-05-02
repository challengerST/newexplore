<?php
date_default_timezone_set("Aisa/BeiJing");
session_start();
$time_1=time();
echo ($_SESSION['time'])."<br>";
echo ($time_1);
if($_SESSION['time']<$time_1){
// echo "<script>alert('时间一去不复返!');location.href='clock.php';</script>";
}else{
    if($_SESSION['time']==$time_1){
echo "<script>alert(今天是谁的生日!)</script>";
    }else{
echo "距离某日的生日还有".ceil((($_SESSION['time'])-($time_1))/(3600*24))."天";    
    }
}
?>