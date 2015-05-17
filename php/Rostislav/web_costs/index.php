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
#btn_new {
	display: inline;
}
#filter_form {
	display: inline;
}
a:link {
	text-decoration: none;
}
</style>
</head>
<body>

<a id="btn_new" href="new.php"><input type="button" value="Добави нов разход"></a>

<form id="filter_form" method="post" action="index.php">

<select name="category">
<?php
$options = array(
    "Всички",
    "Храна",
    "Транспорт",
    "Дрехи",
    "Други"
);
$sel     = "";
$filter  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filter = $_POST['category'];
}
foreach ($options as $p) {
    if ($filter == $p) {
        $sel = "selected='selected'";
    } 
	else { $sel = ""; }
	echo "<option $sel value='" . $p . "'>$p</option>";
}
?>
</select>

<input id="btn_filter" type="submit" value="Филтрирай">

<table id="table1">
<th>Дата</th>
<th>Име</th>
<th>Сума</th>
<th>Вид</th>
<?php

$sum = 0;
echo "<tr>";
$csvfile = file_get_contents("table.csv");
$csvline = explode(PHP_EOL, $csvfile);
foreach ($csvline as $i) {
    $csvrow = explode(',', $i);
    if ($csvrow[3] !== $filter and $filter !== "Всички" and $filter !== "") {
        continue;
    }
    foreach ($csvrow as $csvcell) {
        echo "<td>$csvcell</td>";
    }
    $sum += $csvrow[2];
    echo "</tr>";
}

?>
<tr>
<td>---</td>
<td>ОБЩО:</td>
<?php
$total = number_format($sum, 2, '.', '');
echo "<td>" . $total . "лв" . "</td>";
?>
<td>---</td>
</tr>
</table>
</form>
</body>
</html>