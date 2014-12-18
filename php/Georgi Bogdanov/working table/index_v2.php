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
	
   
	  <option id="all" value="all">Всички</option>
      <option id="food" value="food">Храна</option>
      <option id="transport" value="transport">Транспорт</option>
      <option id="clothes" value="clothes">Дрехи</option>
      <option id="other" value="other">Други</option>
	
	</select>
	<?php
		if ($_GET)
			echo "<script>
			document.getElementById ('".$_GET['filter']."').setAttribute('selected','selected');			
			
			</script>";
	?>		
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
		if ( isset($_GET["filter"]) ) {
			$filter=$_GET["filter"];
		} 
		else $filter="all";

		
			for ( $i=0 ; $i < count($data) ; $i++) 
			{	
				$pos = strpos($data[$i], $filter);
				if ($filter!=="all" && $pos === false) {
				continue;
				}
				if (strlen($data[$i])===0){
				continue;
				}
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


