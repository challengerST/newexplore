<?php
$arr = array (
    array ("1","a","A"),
    array("2","b","B")
);
for ($row = 0; $row <  4; $row++) {
echo "行数 " . $row;
echo "<ul>";
   for ($col = 0; $col <  3; $col++) {
     echo "<li>".$arr[$row][$col]."</li>";
   }
   echo "</ul>";
}
?>