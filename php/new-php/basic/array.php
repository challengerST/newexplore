<?php
$cars=array('1','2','3');
echo $cars[0]."<br>";
echo count($cars);
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
echo ($cars[$x]) . "<br>";
}
//associative array
$arr2=array("1"=>"a","2"=>"b","3"=>"c");
foreach($arr2 as $x=>$x_value){
    echo "key : " . $x . "character : " . $x_value . "<br>"; 
}
$arr2=array("1"=>"A","2"=>"B","3"=>"C");
foreach($arr2 as $x=>$y){
    echo "key : " . $x . "Uppercase : ". $y . "<br>"; 
}
// $age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
// foreach($age as $x=>$x_value) {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
// }

?>