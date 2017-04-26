<?php
echo "<form action='' method='post'>",
"数字口令:"."<input type='text' name='str'>",
"<input type='submit'' name='sub'><br>";
define("pi","0.302");
session_start();
function creatE($str){
return $str=$str+pi;
}
function destoryE($str){
return $str=$str-pi;
}
if(isset($_POST[sub])){
echo "加密:".creatE($_POST[str]);
$_SESSION[pwd]=creatE($_POST[str]);
}
?>
<a href='repeatencrypt.php?pwd=1'>解密</a>
<?php
if(isset($_GET[pwd])){
    echo "解密:".destoryE($_SESSION[pwd]);
}
?>