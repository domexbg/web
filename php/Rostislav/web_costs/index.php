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
#filter_form {display: inline;}
</style>
</head>
<body>

<form id="btn_new" action="new.php">
    <input type="submit" value="Добави нов разход">
</form>	

<select name="category" onchange="">
<option value="all" selected="selected">Всички</option>
<option value="food">Храна</option>
<option value="transport">Транспорт</option>
<option value="clothes">Дрехи</option>
<option value="others">Други</option>
</select>

<form id="filter_form" method="post" action="
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $filter = $_POST['category'];
	 $csvfile = file_get_contents("table.csv");
	 // To be continued
}
?>
">
<input id="btn_filter" type="submit" value="Филтрирай">
</form>

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
$row = 1;
$sum = 0;
if (($mytable = fopen("table.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($mytable, 1000, ",")) !== FALSE) {
        $datalength = count($data);
        $row++;
        for ($i = 2; $i < $datalength; $i += 4) {
            $sum += $data[$i];
        }
    }
    fclose($mytable);
}
$total = number_format($sum, 2, '.', '');
echo "<td>".$total."лв"."</td>";
?>
<td>---</td>
</tr>
</table>

</body>
</html>
