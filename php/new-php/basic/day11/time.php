<?php
session_start();
if(isset($_POST['sub1'])){
$_SESSION['time']=time();
echo "<script>alert('答题开始')</script>";
}
if(isset($_POST['sub2'])){
if(isset($_SESSION['time'])){
echo time()-$_SESSION['time']."秒后结束";
session_destroy();
}else{
    echo "<script>alert('请先完成答题!')</script>";
}
}
$time_1=time();
// print_r($time_1);
$time_2=strtotime("2017-5-3");
echo (ceil((($time_2)-($time_1))/3600/24))."天";
?>
<form action="" method="post">
<input type="submit" name="sub1" value="开始计时">
<input type="submit" name="sub2" value="计时结束">
</form>