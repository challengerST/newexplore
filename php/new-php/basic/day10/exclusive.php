<?php
// $str="12345678";
$arr=array("1","2","3","ming2");
// $a="tobe";
// $c=($a^$str);
// echo $c;
// echo gettype($str);
// $c=intval($str);
// echo $c;
// echo gettype($c);
    if(isset($_POST['sub'])){
$a=$_POST[text];        
        var_dump($arr);
foreach($arr as $key => $value){
if(preg_match("/$a/",$value)){
echo $value;
}
    }
}
?>
<form action="" method="post">
<input type="text" name="text">
<input type="submit" name="sub">
</form>