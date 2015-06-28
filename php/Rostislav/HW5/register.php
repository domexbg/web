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
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<style>
@CHARSET "UTF-8";
.container {
	text-align: center;
	margin: auto;
	margin-top: 10%;
	width: 80%;
	padding: 5px;
}
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	outline: none;
}
.form-control {
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
	@include box-sizing(border-box);
	&:focus	{
	z-index: 2;
	}
}
body {
	background-image: url("letters-and-words.jpg");
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.login-form {
	margin-top: 60px;
}
form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
form[role=login] input, form[role=login] button {
	font-size: 18px;
	margin: 16px 0;
}
form[role=login]>div {
	text-align: center;
}
.centered {
	font-weight: bold;
	text-align: center;
	margin-left: auto;
    margin-right: auto;
	margin-top: 34%;
}
.hidden {
	display: none;
}
</style>
</head>
<body>
<?php
	$reguser = $regpass = $regpass2 = $validatemsg = "";
	$errordiv = $successdiv = "<div class='hidden'>";
	$closediv = "</div>";
	if ($_SESSION and $_SESSION['username']) { 
		header('Location: index.php'); 
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$reguser = test_input($_POST["reguser"]);
		$reguser = strtolower($reguser);
		$regpass = test_input($_POST["regpass"]);
		$regpass2 = test_input($_POST["regpass2"]);
		$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
		$check = regcheck($connection, $reguser, $regpass, $regpass2);
		switch ($check) {
			// If user is taken
			case 1:
				$validatemsg = "Потребителското име е заето.";
				break;
			// User free, but too short.
			case 2:
				$validatemsg = "Потребителското име трябва да съдържа поне 3 символа.";
				break;
			// User free and OK, but password is too short.
			case 3:
				$validatemsg = "Паролата трябва да съдържа поне 3 символа.";
				break;
			// User free and OK, but passwords don't match.
			case 4:
				$validatemsg = "Въведените пароли не съвпадат.";
				break;
			// User & password = same
			case 5:
				$validatemsg = "Потребителското име и паролата не трябва да са еднакви.";
				break;
			// If user & pass OK
			case 6:
				$regpass = md5($regpass);
				$sql = "INSERT INTO userpass (user,password) VALUES ('$reguser', '$regpass');";
				mysqli_query($connection, $sql);
				$successdiv = "<div class='centered'>";
				$_SESSION['username'] = $reguser;
				echo "<script>
					$(document).ready(function() {
						var delay = 5;
						function countdown() {
							setTimeout(countdown, 1000) ;
							$('#success').html('Регистрацията е успешна. Пренасочване към началната страница след '  + delay  + ' секунди.');
							delay--;
							if (delay < 0 ) {
							window.location = 'index.php';
							}
						}
						countdown();
					});
					</script>";
				mysqli_close($connection);	
				break;
		}
		if ($validatemsg !== "") {
		$errordiv = "<div class='centered'>";
		}
	}
?>
	<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<section class="login-form">
				<form method="post" action="register.php" role="login">
					<label for="username">Изберете потребителско име:</label> 
					<input type="username" name="reguser" required class="form-control input-lg" />
					<label for="password">Въведете парола:</label>
					<input type="password" class="form-control input-lg" id="password" name="regpass" required="" />
					<label for="password">Повторете паролата:</label> 
					<input type="password" class="form-control input-lg" id="password" name="regpass2" required="" />
					<button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Регистрация</button>
					<a href="index.php">Назад</a>
				</form>
			</section>
		</div>
		<div class="col-md-4"></div>
<?php echo $errordiv; ?>
	<br><span id="error" class="alert alert-danger" role="alert"><?php echo $validatemsg; ?></span>
<?php
	echo $closediv;
	echo $successdiv;
?>
	<br><span id="success" class="alert alert-success" role="alert"></span>
<?php echo $closediv; ?>
</div>
</body>
</html>