<?php
require "config.php";
require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
.container {
	margin: auto;
	margin-top: 15%;
	width: 30%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
#btn_back {
	float: left;
}
div {
	margin-top: 10px;
}
.form_div {
	float: left;
	width: 100%;
}
table tr, td, th {
	border: 1px solid black;
	border-collapse: collapse;
	padding: 3px;
}
table {
	float: left;
	text-align: left;
	width: 50%;
}
</style>
</head>
<body>
<div class="container">
	<div>
		<a id="btn_back" href="index.php">
			<input type="button" class="btn btn-primary" value="Книги">
		</a>
	</div>
	<div class="form_div">
		<form method="post" action="newauthor.php">
			<div>
				<label for="newauthor">Автор:</label>
				<input type="text" name="newauthor" maxlength="200" required autofocus></input>
				<input type="submit" class="btn btn-primary" value="Добави"></input>
			</div>
		</form>
	</div>
	<div class="form_div">
		<table>
		<th>Автори</th>
			<?php
				$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
				getauthors($connection);
			?>
		</table>
	</div>
</div>
<?php

?>
</body>
</html>