<?php
session_start();
require "functions.php";
require "config.php";
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
	text-align: center;
	margin: auto;
	margin-top: 15%;
	width: 50%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
table tr,td,th {
	border: 1px solid black;
	padding: 5px;
	zoom: 125%;
}
table {
	border: 1px solid black;
	border-collapse: separate;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	text-align: left;
}
.buttons {
	float: left;
	text-align: center;
	width: 100%;
	margin-bottom: 10px;
}
#btn_back {
	font-weight: bold; 
	text-align: center;
	float: left;
	width: 130px;
}
.hidden {
	display: none;
}
.centered {
	position: absolute;
	font-weight: bold;
	text-align: center;
	margin-left: 30%;
    margin-right: 30%;
	margin-top: 2%;
	width: 40%;
}
</style>
</head>
<body>
<div class="container">
	<div class="buttons">
		<a href="index.php"><button id="btn_back" class="btn btn-primary" type="button">Всички книги</button></a>
	</div>
		<table>
			<th>Книга</th>
			<th>Автор</th>
<?php
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	$auth_id = $_GET['id'];
	$auth_id = intval($auth_id);
	$error = "";
	$check = check_get_id($connection, $auth_id);
	if ($check) {
		mysqli_close($connection);
		$error = "<div class='centered'><span class='alert alert-danger' role='alert' autofocus>Няма такъв автор.</span></div>";
	}
	else {
		get_all_from_author($connection, $auth_id);
		mysqli_close($connection);
	}
?>
		</table>
	</div>
<?php
	echo $error;
?>
</div>
</body>
</html>