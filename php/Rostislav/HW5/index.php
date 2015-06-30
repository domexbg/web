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
	background-image: url("letters-and-words.jpg");
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.container1 {
	text-align: center;
	margin: auto;
	margin-top: 15%;
	height: 45px;
	width: 50%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
.container2 {
	text-align: center;
	margin: auto;
	margin-top: 0.5%;
	width: 50%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
table tr,td,th {
	border: 1px solid black;
	padding: 5px;
	zoom: 125%;
	text-align: center;
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
#newbook {
	font-weight: bold; 
	text-align: center;
	float: left; 
	width: 100px;
}
#newauthor {
	margin-left: 5px;
	font-weight: bold; 
	text-align: center;
	float: left;
	width: 100px;
}
#form_search {
	font-weight: bold; 
	text-align: center;
	float: right;
}
#btn_search {
	font-weight: bold;
}
#btn_login {
	margin-left: 5px;
	font-weight: bold; 
	text-align: center;
	float: right;
	width: 100px;
}
#loginfo {
	padding: 7px;
	float: left;
	font-weight: bold;
}
</style>
</head>
<body>
<?php
	$search = "";
	if ($_SESSION and $_SESSION['username']) {
	$username = ucfirst($_SESSION['username']);
	$login_btn = "<a href='logout.php'><button id='btn_login' class='btn btn-primary' type='button'>Изход</button></a>";
	}
	else {
		$username = "Гост";
		$login_btn = "<a href='login.php'><button id='btn_login' class='btn btn-primary' type='button'>Вход</button></a>";
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST" and isset($_POST['search'])) {
		$search = test_input($_POST['search']);
	}
?>
<div class="container1">
	<span id='loginfo'>Влезли сте като: <?php echo $username . "</span>" . $login_btn; ?>
</div>
<div class="container2">
	<div>
		<div class="buttons">
			<a href="newbook.php"><button id="newbook" class="btn btn-primary" type="button">Нова книга</button></a>
			<a href="newauthor.php"><button id="newauthor" class="btn btn-primary" type="button">Нов автор</button></a>
			<form id='form_search' method='post' action='index.php'>
			<label for="search">Книга:</label>
			<input type='text' name='search' maxlength='200'></input>
			<input id='btn_search' type='submit' class="btn btn-primary" value='Търсене'></input>
			</form>
		</div>
		<form method="get" action="booksfromauthor.php">
		<table>
			<th>Книга</th>
			<th>Автор</th>
			<th>Коментари</th>
<?php
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	get_books($connection, $search);
	mysqli_close($connection);
?>
		</table>
		</form>
	</div>
</div>
</body>
</html>