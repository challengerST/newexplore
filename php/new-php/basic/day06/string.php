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
// function Adarr(){
//     return array(1,2,3);
// }
// $prearr=Adarr()[1];
// print_r($prearr);
// $arr=array("echo","2","3");
// list(, ,$secondElement) =$arr;
// var_dump($secondElement);
// $array = array(1, 2);
// $count = count($array);
// for ($i = 0; $i < $count; $i++) {
//     echo "\nChecking $i: \n";
//     echo "Bad: " . $array['$i'] . "\n";
//     echo "Good: " . $array[$i] . "\n";
//     echo "Bad: {$array['$i']}\n";
//     echo "Good: {$array[$i]}\n";
// }
// $arr=array("fruit"=>"apple","veggie"=>"carrot");
// define('fruit','veggie');
// print "$arr[fruit]";
// echo "<br>";
// print $arr['fruit'];
// echo "<br>";
// print $arr[fruit];//constant
// echo "<br>";
// print "{$arr[fruit]}";
// echo "<br>";
// print "{$arr['fruit']}";
// $arr=array(
//     10,
//     5=>"3",
//     3=>"4",
//     'a'=>"5",
//     11,
//     8=>"6",
//     "02"=>"7"
// );
// print_r($arr);
// $colors=array("red","green","blue");
// foreach($colors as &$color){
// $color=strtoupper($color);
// };
// print_r($colors);
// echo "<br>";
// unset($color);
// print_r($colors);
// echo "<br>";
// foreach($colors as $key=>$color){
// $colors[$key]=strtoupper($color);
// };
// print_r($colors);
// $handle=opendir('.');
// while(false!==readdir($handle)){
// $files[]=$file;
// }
// closedir($handle);
// $fruits = array ( "fruits"  => array ( "a" => "orange",
//                                        "b" => "banana",
//                                        "c" => "apple"
//                                      ),
//                   "numbers" => array ( 1,
//                                        2,
//                                        3,
//                                        4,
//                                        5,
//                                        6
//                                      ),
//                   "holes"   => array (      "first",
//                                        5 => "second",
//                                             "third"
//                                      )
//                 );
// unset($fruits['holes'][0]);
// print_r($fruits['holes']);
// $arr=array("red","green","blue");
// foreach($arr as &$color){
//     $color=strtoupper($color);
//     echo $color;
// }
// unset($color);
// print_r($arr);
// echo "<br>";
// $juices['apple']['green']="good";
// print_r($juices);
// echo "<br>";
// var_dump($juices);
// $arr1=array(1,2);
// $arr2=$arr1;
// $arr2[]=4;
// var_dump($arr2);
// echo "<br>";
// $arr3=$arr1;
// $arr3[]=4;
// var_dump($arr3);
// echo "<br>";
// var_dump($arr1);
// $exampleArray = array(0,
//      1,
//      "5.99999999" => 56,
//      2 => 2,
//      3.9999 => 3,
//      3 => 3.1,
//      true => 4,
//      false => 6,
//  );

//array structure
// print_r($exampleArray);
// print_r(array_keys($exampleArray));
// $a['a'] = null;
// $a['b'] = array();
// echo $a['a']['non-existent']; // DOES NOT throw an E_NOTICE error as expected.
// echo $a['b']['non-existent']; // throws an E_NOTICE as expected
$arr=array("1","2","a"=>"3");
array_splice($arr,2);
print_r($arr);
?>