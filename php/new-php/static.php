<?php
function MyStatic() {
$c=0;
    // static $c=0;
    echo $c;
    $c++;
}
// for(var i=0;i<5;i++){
MyStatic();
echo "<br>";
// }
MyStatic();
echo "<br>";
// 暂时还是不可以使用循环的
?>