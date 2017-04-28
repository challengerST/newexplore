<?php 
function GBsubstr($string, $start, $length) {
    if(strlen($string)>$length){
    $str=null;
    $len=$start+$length;
    for($i=$start;$i<$len;$i++){
        if(ord(substr($string,$i,1))>0xa0){
            //ord()函数返回字符的 ASCII (美国国家标准交换码) 序数值。本函数和 chr() 函数相反。
            $str.=substr($string,$i,2);
               $i++;
        }else{
               $str.=substr($string,$i,1);
            }
    }
       return $str.'...';   
    }else{
    return $string;
   }
}
echo GBsubstr("我1234的名字是yangtao杨涛",0,8);
?>