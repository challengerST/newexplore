<?php
class car{
function car($color="red"){
global $color;        
$this->color = $color;
}
function whatcolor(){
    return $this->color;
}
}
function get($obj){
foreach(get_object_vars($obj) as $prop => $val){
    echo "\t$prop = $val\n";
}
}
$new=new car("white");
get($new);
?>