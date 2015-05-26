<?php
session_start();
require "functions.php";
require "config.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
@CHARSET "UTF-8";

.progress-bar {
    color: #333;
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

	&:focus {
	  z-index: 2;
	}
}

body {
	background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
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
form[role=login] img {
	display: block;
	margin: 0 auto;
	margin-bottom: 35px;
}
form[role=login] input,
form[role=login] button {
	font-size: 18px;
	margin: 16px 0;
}
form[role=login] > div {
	text-align: center;
}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
#validatemsg { position: absolute;
	left: 40%;
	top: 45%;
	margin-top: 50px;
}
.hidden {
	display: none;
}
</style>
</head>
<body>
<?php
$reguser = $regpass = $regpass2 = $validatemsg = "";
$errordiv = "<div class='hidden'>";
if ($_SESSION and $_SESSION['username']) { 
header('Location: main.php'); 
}
	
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$reguser = test_input($_POST["reguser"]);
	$reguser = strtolower($reguser);
	$regpass = test_input($_POST["regpass"]);
	$regpass2 = test_input($_POST["regpass2"]);
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	$check = regcheck($connection, $reguser, $regpass, $regpass2);
	// If user & pass OK
	if ( $check === 4) {
		$regpass = md5($regpass);
		$sql = "INSERT INTO userpass (user,password) VALUES ('$reguser', '$regpass');";
		mysqli_query($connection, $sql);
		header('Location: index.php');
	}
	// If user is taken
	else if ($check === 1){
		$validatemsg = "Потребителското име е заето.";
		$errordiv = "<div>";
	}
	// User free, but too short.
	else if ($check === 2){
		$validatemsg = "Потребителското име трябва да съдържа поне 5 знака.";
		$errordiv = "<div>";
	}
	// User free and OK, but password is too short.
	else if ($check === 3){
		$validatemsg = "Паролата трябва да съдържа поне 5 знака.";
		$errordiv = "<div>";
	}
	// User free and OK, but passwords don't match.
	else if ($check === 5) {
		$validatemsg = "Въведените пароли не съвпадат.";
		$errordiv = "<div>";
	}
	mysqli_close($connection);
}
?>
  
<div class="row" id="pwd-container">
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
		<div class="pwstrength_viewport_progress"></div>
			<button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Регистрация</button>
	</form>
	</section>  
</div>
  
<div class="col-md-4"></div>
	
<?php echo $errordiv; ?>
	<div id="validatemsg" class="alert alert-danger"><?php echo $validatemsg; ?></div>
</div>

</body>
</html>