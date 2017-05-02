<?php
if($_POST['sub']){
    if($_FILES['upfile']['name']==''){
        echo "<script>alert('请上传!')</script>";
    }else{
        $info=$_FILES['upfile'];
        if($info['size']>0 &&$info['size']<1024*80){
$dir='upfiles/';
$name=$info['name'];
$rand=rand(0,100000);
$name=$rand.date('YmdHis').$name;
$path='upfiles/'.$name;
if(!is_dir($dir)){
mkdir($dir);
}
$move=move_uploaded_file($info['tmp_name'],$path);
if($move==true){
    echo "<script>alert('文件上传成功!')</script>";
}else{
    echo "<script>alert('文件过大!')</script>";
}
        }
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="upfile" size="20">
<input type="submit" name="sub">
</form>