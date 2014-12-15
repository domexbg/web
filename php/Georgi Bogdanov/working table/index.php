<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
	label {
      display:inline-block;
      width:100px;
	  text-align: left;
      margin: 5px;
    }
  </style>
</head>
<body>
<form method="get" action="index.php">
	<a href="form.php">Добави нов разход </a>
	<select name="filter" autofocus>
	  <option value="all">Всички</option>
      <option value="food">Храна</option>
      <option value="transport">Транспорт</option>
      <option value="clothes">Дрехи</option>
      <option value="other">Други</option>
	</select>
    <button type="submit">Филтрирай</button>
</form>
<table>
<?php
$today=date("d.m.Y");
$data=file_get_contents("data.txt");
$x=explode ( PHP_EOL, $data );
if ($_SERVER["REQUEST_METHOD"] == "GET") {
		echo "<pre>";
		var_dump($_GET);
		echo "</pre>";
		
		}
	
?>
</table>

<table border=1>

	<?php

		$data = $x;
			
			for ( $i=0 ; $i < count($data) ; $i++) 
			{
				//if ........
				echo "<tr>";
				$line = explode("," , $data[$i]);
				for ($j = 0; $j < count($line); $j++)
				{		
					echo"<td>".$line[$j]."</td>"; 
				}
				echo "</tr>";
			}
?>				
</table>
</body>
</html>