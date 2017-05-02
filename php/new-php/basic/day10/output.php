<?php
// $str=<<<mark
// <table>
//     <tr>
//         <td style="border:1px solid #e6e6e6;">1</td>
//     </tr>
// </table>
// mark;
// echo $str;
// $str="YyaNg";
// $a=stristr($str,"Y");
// echo $a;
// $str="p1 p2 p3";
// $a=explode(" ",$str);
// var_dump($a);
session_start();
if(isset($_POST[sub1])){
if($_POST[text]==''){
    echo "<script>alert('创建空数组!')</script>";
}else{
    $_SESSION['array']=$_POST[text];
    echo "<script>alert('数组创建成功!')</script>";
}
}
if(isset($_POST[sub2])){
if(isset($_SESSION['array'])){
    var_dump($_SESSION['array'])."<br>";
$array=explode("#",$_SESSION['array']);
print_r($array);
// session_destroy();
}
else{
echo "<script>alert('请先创建数组!')</script>";
}
}
?>
<form action="" method="post">
    <input type="text" name="text">
    <input type="submit" name="sub1" value="创建数组">
    <input type="submit" name="sub2" value="输出数组">
</form>