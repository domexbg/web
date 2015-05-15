<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
div { margin-top: 10px; }
p { color: green; }
</style>
</head>
<body>
<?php $success = ""; ?>
<form id="btn_back" action="index.php">
    <input type="submit" value="Списък">
</form>
<form method= "post" action="
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
	 $price = $_POST['price'];
	 $category = $_POST['category'];
	 $date = date("d.m.Y");
	 $result = "\r\n".$date.",".$name.",".$price.",".$category;
	 $mytable = fopen("table.csv", "a");
	 fwrite ($mytable, $result);
	 fclose ($mytable);
	 $success = "Въвеждането е успешно!";
}
?>
">
<div>
	<label for="name">Име:</label>
    <input type="text" name="name"></input>
</div>
<div>
	<label for="price">Сума:</label>
    <input type="number" name="price" min="0" step="0.01"></input>
</div>
<div>
	<label for="category">Вид:</label>
    <select name="category">
		<option value="Храна">Храна</option>
		<option value="Транспорт">Транспорт</option>
		<option value="Дрехи">Дрехи</option>
		<option value="Други">Други</option>
	</select>
</div>
<div>
    <input type="submit" value="Добави">
</div>
<div>
<p><b><?php echo $success; ?></b><p>
</div>
</form>

</body>
</html>