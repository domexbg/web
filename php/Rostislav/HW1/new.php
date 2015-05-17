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
<a id="btn_back" href="index.php">
    <input type="button" value="Списък">
</a>
<form method= "post" action="new.php">

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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
	 $price = $_POST['price'];
	 $category = $_POST['category'];
	 $date = date("d.m.Y");
	 $result = PHP_EOL."$date,$name,$price,$category";
	 $mytable = fopen("table.csv", "a");
	 fwrite ($mytable, $result);
	 fclose ($mytable);
	 $success = "Въвеждането е успешно!";
}
?>

<div>
<p><b><?php echo $success; ?></b><p>
</div>
</form>
</body>
</html>