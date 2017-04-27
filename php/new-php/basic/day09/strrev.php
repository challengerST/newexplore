<?php
if(isset($_POST[sub])){
// echo $_POST[txt];
$a=strrev($_POST[txt]);
$b=explode(".",$a);
$c=strrev($b[0]);
echo "文件名后缀:".$c;
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="generator" content="PSPad editor, www.pspad.com">
<title></title>
</head>
<body> <style>
input{
    border:1px solid #000;
    }
.clear{
    clear:both;
}
.ehdel_upload_show input{
    float:left;
     margin-top:10px;
     }
.ehdel_upload{
    float:left;
margin-top:-20px; 
*margin-top:-40px; 
filter:alpha(opacity=0);
-moz-opacity:0;
opacity:0;
}
</style>
<form method="post" action="" enctype="multipart/form-data">
<div class="ehdel_upload_show">
<input id="ehdel_upload_text" type="text" name="txt" />
<input id="ehdel_upload_btn" type="image" src="http://www.isclassic.net/wp-content/uploads/2010/07/link_popup.gif" value="请选择文件" />
</div>
<div class="clear"></div>
<input type="file" onchange="ehdel_upload_text.value=this.value" class="ehdel_upload" />
<input type="submit" name="sub">
</form>
</body>
</html>