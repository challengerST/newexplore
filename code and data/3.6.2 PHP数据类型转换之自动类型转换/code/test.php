<?php
/*
 *  数据类型之间的转换
 *
 *  一、强制转换
 *
 *  	var_dump();
 *
 *  	getType(变量);
 *
 *  	1. setType(变量， 类型);  ----- 是将原变量给转换
 *  	2. 在变量使用时，前面加上类型符号，转 ---- 是在赋值时给新变量一个新类型，原变量类型不变
 *  	3. intval(), floatval()  strval();
 *
 *  二、自动转换
 *
 *	
 *
 */
	$a = "456e3hello 123 world";
	$b = 100;

	$c = $a + $b;

	var_dump($c);

	if(getType($a)=="string") {
	
	}

	if(is_null($a)) {
	
	}

	if(is_array($arr)) {
	
	}

	if(is_string($str)) {
	
	}


	if(empty($a)) {
	
	}

	if(is_null($a)) {
	
	}

















	
