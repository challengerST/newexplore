<?php
$x=5;
$y=10;
function mytest(){
    $x=$GLOBALS['x'];//
echo "我是x ".$x."<br>";//
echo "我是y ".$y."<br>";//

// global $y,$x,$z;
// $z=$y+$x;
//  $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
mytest();
echo $z;
// echo $x;
// echo $y;//10
?>  

