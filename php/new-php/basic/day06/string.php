<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', true);
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
function Adarr(){
    return array(1,2,3);
}
$prearr=Adarr()[1];
print_r($prearr);
list(, $secondElement) = Adarr();
print_r($secondElement);
?>