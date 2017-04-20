<html>
    <meta charset="utf-8">
    <head>
        <title>表单验证</title>
    </head>
    <body>
        <?php
    $name=$email=$web=$comment=$sex='';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
$nameErr="name is required";
}else{
$name=testValue($_POST["name"]);
if(!preg_match("/^[a-zA-Z ]*$/",$name)){
$nameErr="只允许空格和字母";
}
}
        
$email=testValue($_POST["email"]);
$web=testValue($_POST["web"]);
$comment=testValue($_POST["comment"]);
$sex=testValue($_POST["sex"]);
    }
    function testValue($data){
        $data=trim($data);
        $data=stripslashes($data);//去除反斜杠
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
姓名: <input type="text" name="name"><br>
<span><?php echo $nameErr; ?></span>
电邮: <input type="text" name="emil"><br>
网址: <input type="text" name="web"><br>
评论: <input type="textarea" name="comment" rows="5" cols="40"><br>
性别: <input type="radio" name="sex" value="male">男
<input type="radio" name="sex" value="female">女<br>
<input type="submit"><br>
        </form>
    <?php
    echo "<h2>@您的输入是</h2>:";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $web;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $sex;
    ?>
    </body>
</html>