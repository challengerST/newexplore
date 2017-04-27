<?php
$str=$_POST[te];
if(isset($_POST[sub])){
    if($_POST[test]==""){
echo "<script>alert('content cannot be blank!')</script>";
    }else{
$a="<b style='color:#f00;font-size:14px;'>".$_POST[test]."</b>";
echo str_replace("$_POST[test]",$a,$str);
echo "关键词出现了".substr_count($str,$_POST[test])."次";   
    }
}
?>
<form action="" method="post">
<textarea name="te" id="" cols="30" rows="10">
我是杨涛,我是杨涛,我是杨涛,我是杨涛,我是杨涛,我是杨涛,我是杨涛,我是杨涛,
</textarea>
<input type="text" name="test">
<input type="submit" name="sub">
</form>