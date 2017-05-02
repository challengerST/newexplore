<?php
// $a="123";
// $b=(array)$a;
// var_dump($b);
// print_r($b);
// $c=$b[1];
// $c=array("1");
// print_r($c)."<br>";
// $d=(string)$c;
// print_r($d);
// echo gettype($d)."<br>";
// print_r($d);
// echo $d;
$a=array("1"=>array("a","b"),"2"=>array("c","d"));
$b=array_rand($a,1);
echo $b;
// print_r($a[2]);
// if(array_key_exists("a",$a)){
// echo "<script>alert('数组存在此元素!')</script>";
// }else{
// echo "<script>alert('数组不存在此元素!')</script>";  
// }
// $arr=array("1","2","3","4","5","6");
// print_r(array_chunk($a,2));
// for($a=0;$a<count($arr);$a++){
// print_r(list($name,$value)=each($arr));
// }
// print_r($a[1]);
// echo current($a);
// print_r(current($a));
// print_r(next($a));
// print_r(current($a));
// print_r(prev($a));
// print_r(end($a));
?>