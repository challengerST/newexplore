<?php
date_default_timezone_set("Asia/BeiJing");
session_start();
$a=$_POST[text1];
$b=$_POST[text2];
$c=$_POST[text3];
$d=$_POST[text4];
$e=$_POST[text5];
$f=$_POST[text6];
$time=date(mktime($d,$e,$f,$b,$c,$a));
$_SESSION['time']=$time;
if($_POST['sub']){
echo "<script>window.location.href='clockcopy.php'</script>";
// echo $_SESSION['time'];
}
?>
<form action="" method="post">
<input type="text" name="text1" size="2">年<input type="text" name="text2" size="2">月
<input type="text" name="text3" size="2">日<input type="text" name="text4" size="2">时
<input type="text" name="text5" size="2">分<input type="text" name="text6" size="2">秒
<input type="submit" name="sub" value="定时">
</form>