<?php
$arr=array("john"=>"04月22号","wang"=>"06月1号","yang"=>"07月1号");
foreach($arr as $y => $value){
    if(date("m月d号")==$value){
    echo '今天是'.$value.'是'.$y.'的生日'; 
    }
}
?>