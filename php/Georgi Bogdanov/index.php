 <!DOCTYPE html>
<html>
<body>
<table border=1 >
<?php
$cars = array
   (
   array("Volvo",22,18,0),
   array("BMW",15,13,0),
   array("Saab",5,2,0),
   array("Land Rover",17,15,0)
   );
	
	for ($i = 0; $i < count($cars); $i++) 
	{
		echo "<tr>";
		for ($j = 0; $j < count($cars[0]); $j++) 
		{
			echo"<td>".$cars[$i][$j]."</td>";
		} 
		echo "</tr>"; 
	}
	
			//echo "<tr><td>$cars[0][0]</td><td>$cars[0][1]</td><td>$cars[0][2]</td></tr>";
			//echo "<tr><td>$cars[1][0]</td><td>$cars[1][1]</td><td>$cars[1][2]</td></tr>";
			//echo "<tr><td>$cars[2][0]</td><td>$cars[2][1]</td><td>$cars[2][2]</td></tr>";
			//echo "<tr><td>$cars[3][0]</td><td>$cars[3][1]</td><td>$cars[3][2]</td></tr>";
?>
</table>
</body>
</html>
