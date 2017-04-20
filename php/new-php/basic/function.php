<?php
// a parameter
function myname($myxing){
    echo $myxing . 'yang <br>'; 
}
myname('tao');
// two parameter
function mynames($myxing,$myname){
    echo $myname . $myxing;
}
mynames('tao','yang');
//return value
function returnValue($x,$y){
 $z=$x+$y;
 return $z;
}
echo '4 + 7 = ' . returnValue(4,7);
?>