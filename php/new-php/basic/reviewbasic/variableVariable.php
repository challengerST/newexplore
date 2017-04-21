<?php
$a=4;
echo $a;
echo "<br>";
$b=& $a;
echo $b;
echo "<br>";
$a=7;
echo $b;
echo "<br>";
unset($a);
echo $b;
?>
<script>
var a = 0;

	for(var i=0; i<10; i++) {
		a+=0.1;
        console.log(a);
	}

	alert(Math.trunc(22.3));
</script>
