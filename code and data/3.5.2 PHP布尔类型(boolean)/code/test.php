<?php
	//boolean

// boolean  false
// int  0
// float 0.0  0.00
// string "" "0"
// array 空数组



	$bool = null;

	var_dump($bool);

	echo "<br>";

	if( $bool ) {
		echo "这个变量可以是真值";
	} else {
		echo "这个变量是假值";
	}

	$link = mysql_connect("localhost", "root", "");

	if($link) {
	
	}
