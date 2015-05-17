<!DOCTYPE html>
<html>
<body>
<table style='border: 1px solid black; border-collapse: collapse'>
<?php
$open_ = "<div id='container'>";
$close_ = "</div>";
echo $open_."My first PHP script!".$close_;
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15),
  array("Hyundai",90,11)
  );


  
for ($row = 0; $row < count($cars); $row++) {
  echo "<tr>";
  
  for ($col = 0; $col < 3; $col++) {
	 echo "<td style='border: 1px solid black;'>";
    echo $cars[$row][$col];
	echo "</td>";
  }
  echo "</tr>";
}


?>
</table>
</body>
</html>