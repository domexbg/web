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
      <option value="clothes" selected>Дрехи</option>
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
		var_dump($x);
		echo "</pre>";
		
		}
	
?>
</table>
</body>
</html>

