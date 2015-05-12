<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
#table1	{
	border: 2px solid black;
	border-collapse: collapse;
	padding: 5px;
	margin-top: 10px;
}
table#table1 td, th {
	border: 2px solid black;
	border-collapse: collapse;
	padding: 5px;
}
#btn_new {display: inline;}
</style>
</head>
<body>

<form id="btn_new" action="new.php">
    <input type="submit" value="Добави нов разход">
</form>	
<select id="sel" onchange="">
<option value="all" selected="selected">Всички</option>
<option value="food">Храна</option>
<option value="transport">Транспорт</option>
<option value="clothes">Дрехи</option>
<option value="others">Други</option>
</select>
<button id="filter" type="button" onclick="">Филтрирай</button>


<table id="table1">

<th>Дата</th>
<th>Име</th>
<th>Сума</th>
<th>Вид</th>
<?php
echo "<tr>";
$csvfile = file_get_contents("table.csv");
$csvline = explode(PHP_EOL, $csvfile);
for ($i = 0; $i < count($csvline); $i++) {
$csvcell = explode(',', $csvline[$i]);
	for ($p = 0; $p < count($csvcell); $p++) {
	echo "<td>".$csvcell[$p]."</td>";
	}
echo "</tr>";
}
?>
<tr>
<td>---</td>
<td>ОБЩО:</td>
<?php
$total = 1080.79;
echo "<td>".$total."</td>";
?>
<td>---</td>
</tr>
</table>

</body>
</html>
