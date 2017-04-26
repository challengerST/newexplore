<?php
// for($a=0;$a<8;$a++){
// if($a%2==0){
//     continue;
// }
//   echo "<tr>";  
//     for($b=0;$b<8;$b++){
//         if($b%2!=0){
//             //  echo "<td>$a"."*$b"."="."$a*$b</td>" ;
//             echo "<td>",
//             "$a*$b=".$a*$b,
//         "</td>";
//         }else{
//             continue;
//         }
// }
// echo "</tr>";
// }
$arr=array(1,2,3,4);
?>
<form action="" method="post">
<textarea name="" id="" cols="20" rows="6" name="te">
1/<?php echo $arr[0]?>                   2/<?php echo $arr[1]?>                  3/<?php echo $arr[2]?>                      4/<?php echo $arr[3]?>
</textarea><br>
<input type="text" name="text" value="请输入要跳出的编号" onFocus="this.value=">
<input type="submit" name="sub" value="跳过"> 
</form>
<?php
if(isset($_POST[sub])){
for($a=0;$a<count($arr);$a++){
    if($_POST[text]==$a){
        continue;
    }else{
        echo "《";
        echo $arr[$a];
        echo "》";
    }
}
}
?>