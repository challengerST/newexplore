<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
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
echo $_GET.'<br>';
print $_GET.'<br>';
print_r($_GET);
if(isset($_GET['sub'])){
    $sum=0;
    if($num1 && $num2 && $numa && $numb){
        switch($_GET['ysf']){
case '+':
$sum=$_GET['fnum'] + $_GET['bnum'];
break;
case '-':
$sum=$_GET['fnum'] - $_GET['bnum'];
break;
case '*':
$sum=$_GET['fnum'] * $_GET['bnum'];
break;
case '/':
$sum=$_GET['fnum'] / $_GET['bnum'];
break;
case '%':
$sum=$_GET['fnum'] + $_GET['bnum'];
break;
        }
    }
}
?>
<body>
  <div>
  <table>
  <form action="calculator.php">
  <tr>
  <td>
      <input type="text" name="fnum">
  </td>
  <td>
  <select type="text" name="ysf">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
  <option value="%">%</option>
  </select>
  </td>
  <td>
  <input type="text" name="bnum">
  </td>
  <td>
  <input type="submit" name="sub" value="计算">
  </td>
  <?php
  if(isset($_GET['sub'])){
echo '<tr><td colspan="5">';
if($num1 && $num2 && $numa &&$numb){
echo $_GET['fnum'] . $_GET['ysf'] . $_GET['bnum'] . '=' . $sum;
};
echo '</td></tr>';
  }
  ?>
  </tr>
  </form>  
  </table>
  </div>
</body>
</html>