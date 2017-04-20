<?php
	echo "以下是4种标量: <br>";

	$var = true;

	var_dump($var);  //boolean
	echo "<br>";


	$var = 10;

	var_dump($var);   //int
	echo "<br>";

	$var = 10.12;

	var_dump($var);     //float
	echo "<br>";

	$var = "hello world";

	var_dump($var);   //string
	echo "<br>";

	echo "以下是两种复合类型: <br>";

	$var = array("one", "two", "three");

	var_dump($var);   //array
	echo "<br>";

	class Demo {
		var $one = 10;
		var $two = 20;
		var $three = 30;
	}


	$var = new Demo;

	var_dump($var);   //object
	echo "<br>";



	echo "以下输出两种特殊的类型:<br>";

	$var = mysql_connect("localhost", "root", "");

	var_dump($var);   //object
	echo "<br>";

	$var = null;

	var_dump($var);   //object
	echo "<br>";


	
