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
.container {
	position: absolute;
	margin-left: 40%;
	margin-right: 40%;
	margin-top: 20%;
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
body {
	background-image: url("letters-and-words.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
p { 
	font-weight: bold;
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
	margin-top: 15%;
	width: 40%;
}
#select {
	zoom: 125%;
}
</style>
</head>
<body>
<?php
	$errordiv = "<div class='hidden'>";
	$error = "";
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
		$newbook = $_POST['newbook'];
		if (strlen(utf8_decode($newbook)) < 3) {
			$error = "<span class='alert alert-danger' role='alert' autofocus>Името на книгата трябва да съдържа поне 3 символа.</span>";
			$errordiv = "<div class='centered'>";
		}
		else {
			$newbook = test_input($_POST['newbook']);
			foreach ($_POST['authors'] as $newauthor) {
				$newauthors[] = $newauthor;
			}
			$check = addbook($connection, $newbook, $newauthors);
			mysqli_close($connection);
			if ($check) {
				$errordiv = "<div class='centered'>";
				$error = "<span id='success' class='alert alert-success' role='alert' autofocus></span>";
				echo "<script>
				$(document).ready(function() {
				var delay = 3;
				
				function countdown() {
					setTimeout(countdown, 1000) ;
					$('#success').html('Книгата е въведена успешно.');
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
				$error = "<span class='alert alert-danger' role='alert' autofocus>Книгата вече съществува.</span>";
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
		<form method="post" action="newbook.php" id='book'>
			<div>
				<label for="newbook">Заглавие:</label>
				<input type="text" name="newbook" maxlength="200" required autofocus></input>
				<input type="submit" id="btn_add" class="btn btn-primary" value="Добави"></input>
			</div>
		</form>
	</div>
	<div class="form_div">
		<p>Автори:</p>
		<select id='select' name='authors[]' form='book' multiple size='10' required>
			<?php
				$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
				selectauthors($connection);
				mysqli_close($connection);
			?>
		</select>
	</div>
</div>
</body>
</html>