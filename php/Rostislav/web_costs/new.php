<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
div { margin-top: 10px; }

</style>
</head>
<body>
<form id="btn_back" action="index.php">
    <input type="submit" value="Списък">
</form>
<div>
	<label for="name">Име:</label>
    <input type="text" id="name"></input>
</div>
<div>
	<label for="price">Сума:</label>
    <input type="number" id="price" min="0" step="0.01"></input>
</div>
<div>
	<label for="category">Вид:</label>
    <select id="category" onchange="">
		<option value="food">Храна</option>
		<option value="transport">Транспорт</option>
		<option value="clothes">Дрехи</option>
		<option value="others">Други</option>
	</select>
</div>
<div>
<form id="btn_add" action="">
    <input type="submit" value="Добави">
</form>
</div>
</body>
</html>