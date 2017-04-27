<?php
// function verstr($str){
// $arr=array(1,2,3,4,5,6);
// $verarr=implode($arr);
// if(preg_match("/$str/",$verarr)){
//     echo "<script>alert('含有敏感词汇!');location.href='./day08/new1.php'</script>";
// }else{
//     echo "内容为:".$str;
// }
// }
// if(isset($_POST[sub])){
//     if($_POST[te]==""){
// echo "<script>alert('content cannot be blank!')</script>";
//     }else{
// echo verstr($_POST[te]);
//     }
// }
// $str="Inter intrtrtr (id ,,,)VALUE('1','YANG','$*#&@','2016-03-19')";
// echo $str."<br>";
// echo addslashes($str);
$arr=" i an em";
$s=explode(" ",$arr);
print_r($s);
echo implode($s);
?>
<!--<form action="" method="post">
<textarea name="te" id="" cols="30" rows="10">
</textarea>
<input type="submit" name="sub">
</form>-->
