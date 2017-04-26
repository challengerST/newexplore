<?php
// if(!@$f=fopen("num.txt","r")){
// echo "文件不存在";
// $num=0;
// }else{
//     $num=fgets($f,10);
//     fclose($f);
// }
// $num++;
/*real counter*/
// $ff=fopen("num.txt","w");
// fwrite($ff,$num);
// fclose($ff);
// $numarr=str_split($num);
// print_r($numarr);
// echo $num;
// date_default_timezone_set("Asia/ShangHai");
// $a=strtotime("now");
// $b=strtotime("01 May 2017");
// echo "输出日期:".date("Y-m-d H:i:s","a")."<br>";;
// echo "输出日期:".date("Y-m-d H:i:s","b")."<br>";
// $c=ceil(($b-$a)/60/60/24);
// echo $c."天";    
// for($a=0;$a<10;$a++){
//     echo $a%2==0 ? $a."这个数字是偶数<br>" : $a."这个数字是基数<br>";
// }
// echo "<form action='' method='post'>", 
// "用户名:<input type='text' name='username'>",
// "登录密码:<input type='password' name='pwd'>",
// "<input type='submit' name='sub'>";
// if(isset($_POST[sub])){
//     if($_POST[username]=="mr" && $_POST[pwd]=="123456"){
//        echo "<script>alert('登陆成功!')</script>";
//     }else{
//        echo "<script>alert('failed login!')</script>";
//     }
// }
// $arr1=array("生日快乐","今天是你的出生日","同学们为你许愿");
// $arr2=array("祝你万事如意","祝你生日快乐","祝你福如东海寿比南山");
// $rand=rand(0,2);
// echo $arr1[$rand],$arr2[$rand];
// require("new.php");
// switch($_GET['link']){
// case "我的家乡":
// echo $str1;
// require_once("new.php");
// break;
// case "我的玩具":
// require_once("new1.php");
// echo $str2;
// break;
// $a=date("l");
// switch($a){
// case"monday";
// echo "今天周一";
// break;
// case"Wednesday";
// echo "今天周三";
// break;
// }
$a="file.php?pwd=1";
$b=urlencode($a);
$c=urldecode($b);
echo $c;
// echo $a;
// }
?>
<!--<a href="file.php?link=我的家乡">链接</a>-->
<!--<a href="file.php?link=我的家乡">家乡</a><a href="file.php?link=我的玩具">玩具</a>-->