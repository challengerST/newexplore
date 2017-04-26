<?php
$str="宝贝：液晶电视显示器#一口价：900元#运费：30元（自理）";
if(isset($_GET[pull])){
    echo "<script> alert('add a shopping cart to success!') </script>";
}
if(isset($_GET[pop])){
$arr=explode("#",$str);
foreach($arr as $key =>$value){
echo "<tr><td>$value</td></tr>";
?>
<tr><td><
?php  echo $value; ?>
</td></tr>
<?php
}
}
?>
<a href="explode.php?pull=1">add</a>
<a href="explode.php?pop=1">show</a>