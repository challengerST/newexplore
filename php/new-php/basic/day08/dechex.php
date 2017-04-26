<?php
for($a=0;$a<10;$a++){
    if($a<=5){
        $rand .=dechex(rand(0,15));
    }else{
        continue;
    }
}
?>
<table height="55" bgcolor="#<?php echo $rand;?>">
<tr>
<td width="156">
</td>
</tr>
</table>