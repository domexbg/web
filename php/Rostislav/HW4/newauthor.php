<?php
require "config.php";
require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<style>
body {
	background-image: url("letters-and-words.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.container {
	position: absolute;
	margin-left: 40%;
	margin-right: 40%;
	margin-top: 15%;
	width: 20%;
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
	text-align: center;
	zoom: 125%;
}
table {
	margin-top: 10px;
	float: left;
	text-align: left;
	width: 100%;
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
	margin-top: 10%;
	width: 40%;
}
</style>
</head>
<body>
<?php
	$errordiv = "<div class='hidden'>";
	$error = "";
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
		$newauthor = $_POST['newauthor'];
		if (strlen(utf8_decode($newauthor)) < 3) {
			$error = "<span class='alert alert-danger' role='alert' autofocus>Името на автора трябва да съдържа поне 3 символа.</span>";
			$errordiv = "<div class='centered'>";
		}
		else {
		$newauthor = test_input($_POST['newauthor']);
		$check = addauthor($connection, $newauthor);
		mysqli_close($connection);
			if ($check) {
				$errordiv = "<div class='centered'>";
				$error = "<span id='success' class='alert alert-success' role='alert' autofocus></span>";
				echo "<script>
				$(document).ready(function() {
				var delay = 3;
				
				function countdown() {
					setTimeout(countdown, 1000) ;
					$('#success').html('Авторът е въведен успешно.');
					delay--;
					
					if (delay < 0 ) {
					$('#success').addClass('hidden');	
					}
				}
				countdown();
				});
				</script>";
			}
			else {
				$errordiv = "<div class='centered'>";
				$error = "<span class='alert alert-danger' role='alert' autofocus>Авторът вече съществува.</span>";
			}
		}
	}
	echo $errordiv;
	echo $error;
	echo "</div>";
?>
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
</body>
</html>