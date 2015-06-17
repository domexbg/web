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
body {
	background-image: url("letters-and-words.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.container {
	margin: auto;
	margin-top: 15%;
	width: 30%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
#btn_back {
	font-weight: bold; 
	text-align: center;
	float: left;
	width: 130px;
}
#btn_add {
	font-weight: bold; 
	text-align: center;
	width: 100px;
}
.form_div {
	margin-top: 10px;
	float: left;
	width: 100%;
}
table tr, td, th {
	border: 1px solid black;
	border-collapse: collapse;
	padding: 3px;
}
table {
	margin-top: 10px;
	float: left;
	text-align: left;
	width: 50%;
}

</style>
</head>
<body>
<div class="container">
	<div>
		<a href="index.php">
			<input type="button" id="btn_back" class="btn btn-primary" value="Всички книги">
		</a>
	</div>
	<div class="form_div">
		<form method="post" action="newauthor.php">
			<div>
				<label for="newauthor">Автор:</label>
				<input type="text" name="newauthor" maxlength="200" required autofocus></input>
				<input type="submit" id="btn_add" class="btn btn-primary" value="Добави"></input>
			</div>
		</form>
	</div>
	<div class="form_div">
		<table>
		<th>Автори</th>
			<?php
				$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
				getauthors($connection);
				mysqli_close($connection);
			?>
		</table>
	</div>
</div>
<?php

?>
</body>
</html>