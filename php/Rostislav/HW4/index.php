<?php
require "functions.php";
require "config.php"
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
</style>
</head>
<body>
<div class="container">
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
<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$search = test_input($_POST['search']);
	}
	else {
		$search = "";
	}
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