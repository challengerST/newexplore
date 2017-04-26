<?php
for($a=0;$a<10000;$a++){ 
if($_POST[sub]){    
if($a>=$_POST[text]){
        break;
    }else{
        echo "已经输出了".($a+1)."次<br>";
    }
    }
}
?>
<form action="" method="post">
<input type="text" name="text">
<input type="submit" name="sub">
</form>
