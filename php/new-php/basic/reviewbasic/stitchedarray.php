<?php
$arr1=array("1"=>"a","2"=>"b");
$arr2=array("1");
var_dump($arr2);
echo "<br>";
var_dump($arr1);
echo "<br>";
echo $arr1;
foreach($arr1 as $x=>$y){
    echo "key : " . "$x" . "value" . "$y";
}
?>