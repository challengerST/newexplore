<?php
	$year = 2016 ;

	if(($year%4==0 && $year%100!=0) || $year%400==0) {
		echo "这个年 {$year} 是闰年";
	}else {
		echo "是平年";
	}
