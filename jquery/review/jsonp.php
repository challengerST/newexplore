<?php
header('Content-type:application/json');
$jsoncallback=htmlspecialchars($_REQUEST['jsoncallback']);
$json_data='["customer1","customer2"]';
echo $jsoncallback."(".$json_data.")";
?>