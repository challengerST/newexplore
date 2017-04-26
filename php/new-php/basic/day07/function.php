<?php
// error_reporting(E_ALL);
// ini_set('display_errors', true);
// ini_set('html_errors', true);
/* conditional function*/
// $num=true;
// if($num){
// function run(){
//     echo "huston";
// }
// }
// // run();
// if(true)run();
/* nested function */
// function foo(){
//     function run(){
// echo "it is me!";
//     }
// }
// foo();
// run();
// foo();
/*recursive function*/
/*tired ride*/
// function run($a){
//     if($a==0){
// return 0;
//     }else{
// if($a==1){
//         return 1;
//     }else{
//         return $a*run($a-1);
//     }
//     }
// }
/*accumulate*/
// function accumulate($a){
//     if($a==0){
// return 0;
//     }else{
//     if($a==1){
// return 1;
//     }else{
// return $a+accumulate($a-1);
//     }
//     }
// }
// echo run(2);
// echo accumulate(2);
// function run($a,$b){
// if($a>$b){
// echo "a is greater than b";
// }elseif($a==$b){
// echo "a is equaled to b";
// }else{
// echo "a is smaller than b";    
// }
// }
// run(4,6);
/*value only*/
// $arr=array("A"=>"1","B"=>"2","C"=>"3");
// reset($arr);
// foreach($arr as $key=>$value){
// echo "Value: $value <br>";
// }
// $arr=array(1,2,3,4);
// reset($arr);
// $i=0;
// foreach($arr as $value){
//     $arry[$i]=$value;
//     $i++;
// }
// print_r($arry);
// echo __FILE__;
echo "<form method='post' action=''>",  
"数字口令：<input type='text' name='str'>",
"<input type='submit' name='sub' value='确定'>",
"</form>";
define("pi","0.313");
session_start();
function creatE($str){
return $str=$str+pi;
}
function destoryE($str){
return $str=$str-pi;
}
if(isset($_POST[sub])){
echo "加密口令:".creatE($_POST[str])."<br>";
$_SESSION[pwd]=creatE($_POST[str]);
}
?>
<a href="function.php?pwd=1">解密</a>
<?php
if(isset($_GET[pwd])){
echo "解密口令:".destoryE($_SESSION[pwd]);
}
?>