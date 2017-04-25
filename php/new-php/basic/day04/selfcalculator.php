<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>self_calculator</title>
  <style>
    tr{
      display:inline-block;
      border:1px solid #000;
  }
  </style>
</head>
<?php
$num1=true;
$num2=true;
$numa=true;
$numb=true;
$err="";
if(isset($_GET['sub'])){
if(empty($_GET['fnum'])){
$num1=false;
$err="数字不能为空";
}
if(!is_numeric($_GET['fnum'])){
$numa=false;
$err="请填写数字";
}
if(empty($_GET['bnum'])){
$num2=false;
$err="数字不能为空";
}
if(!is_numeric($_GET['bnum'])){
$numb=false;
$err="请填写数字";
}

$sum=0;
echo $num1;
echo $num2;
if($num1 && $num2 && $numa && $numb){
  switch($_GET['ysf']){
   case "+":
   $sum=$_GET['fnum']+$_GET['bnum'];
   break;
   case "-":
   $sum=$_GET['fnum']-$_GET['bnum'];
   break;
   case "*":
   $sum=$_GET['fnum']*$_GET['bnum'];
   break;
   case "/":
   $sum=$_GET['fnum']/$_GET['bnum'];
   break;
   case "%":
   $sum=$_GET['fnum']%$_GET['bnum'];
   break;
  }
}
}
?>
<body>
  <table>
  <form action="selfcalculator.php">
  <tr>
  <td><input type="text" name="fnum" value="<?php echo $_GET['fnum']?>" ></td>
  <td><select type="text" name="ysf">
  <option value="+" <?php echo $_GET['ysf'] == "+" ?"selected" : "";?>>+</option>
  <option value="-" <?php echo $_GET['ysf'] == "-"?"selected":"" ?>>-</option>
  <option value="*" <?php echo $_GET['ysf'] == "*"?"selected":"" ?>>*</option>
  <option value="/" <?php echo $_GET['ysf'] == "/"?"selected":"" ?>>/</option>
  <option value="%" <?php echo $_GET['ysf'] == "%"?"selected":"" ?>>%</option>
  </select>
  </td>
  <td><input type="text" name="bnum" value="<?php echo $_GET['bnum']?>"></td>
  <td><input type="submit" name="sub"></td>
  </tr>
  <?php
  if(isset($_GET['sub'])){
echo "<tr>";
  if($num1 && $num2 && $numa && $numb){
echo "<td>".$_GET['fnum'].$_GET['ysf'].$_GET['bnum']."=".$sum."</td>";
  };
echo "</tr>";
  }
  ?>
  </form>
  </table>
</body>
</html>
