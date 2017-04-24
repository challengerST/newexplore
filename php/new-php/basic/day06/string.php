<?php
// $arr=array("0"=>"1","1"=>"2","2"=>"3");
// print_r($arr);
// echo "<br>";
// foreach($arr as $arr_var => $value){
// unset($arr[$arr_var]);
// }
// print_r($arr);
// echo "<br>";
// $arr[]=7;
// print_r($arr);
// echo "<br>";
// $arr=array(
//     1=>'a',
//     "1"=>"b",
//     1.5=>"c",
//     true=>"d"
// );
// var_dump($arr);
// $arr=array(
//     1,
//     2,
//     false=>3,
//     4
// );
// $arr=array(
//     1,
//     2,
//     5=>3,
//     4
// );
// var_dump($arr);
// list( , ,$power)=$arr;
// echo $power;
//the use of list
list($a, list($b, $c)) = array(1, array(2, 3));

var_dump($a, $b, $c);

?>