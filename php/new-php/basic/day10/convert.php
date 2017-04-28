<!--<?php

?>
<script language="javascript">
function veal(myform){
var ip=form.ip.value;
objExp=/(\d+).(\d+).(\d+).(\d+)/;
if(ip==''){
alert("请输入ip地址");form1.ip.focus();return;
}
}
if(objExp.test(ip)){
myform.ipNum.value=convert(ip);
}else{
    alert("你输入的ip地址不合法!");form1.ip.focus();return;
}
function convert(ip){
ip=ip.spli('.');
vip=
}
</script>-->
<?php
// $a=substr("abcdef",-1,4);
// echo $a;
$string="我试试我是:杨tao";
function intstr($str,$start,$len){
$strlen=$start+$len;
for($i=0;$i<$strlen;$i++){
if(ord(substr($str,$i,1))>0xa0){
$newstr .=substr($str,$i,2);
$i++;
}else{
$newstr .=substr($str,$i,1);   
}
}
return $newstr;
}
$new=intstr($string,$_POST[te],$_POST[tx]);
if(isset($_POST[sub])){
    echo $string."<br>";
    echo $_POST[te]."<br>";
    echo $_POST[tx]."<br>";
    echo $new;
}
?>
<form action="" method="post">
    "字符串截取开始的位置":<input type="text" name="te">
    "字符串截取长度":<input type="text" name="tx">
    <input type="submit" name="sub">
</form>