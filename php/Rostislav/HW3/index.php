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
	top: 40%;
	margin-top: 50px;
}
.hidden {
	display: none;
}
</style>
</head>
<body>
<?php
$username = $password = $validatemsg = "";
$errordiv = "<div class='hidden'>";
if ($_SESSION and $_SESSION['username']) { 
header('Location: main.php'); 
}
	
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	$check = logincheck($connection, $username, $password);
	if ( $check ) {
		$_SESSION['username'] = $username;
		header('Location: main.php');
	}
	else {
		$validatemsg = "Невалидно потребителско име или парола.";
		$errordiv = "<div>";
	}
	mysql_close($connection);
}
?>
  
<div class="row" id="pwd-container">
<div class="col-md-4"></div>

<div class="col-md-4">
  <section class="login-form">
	<form method="post" action="index.php" role="login">
		<label for="username">Потребителско име:</label>
		<input type="username" name="username" required class="form-control input-lg" />
		<label for="password">Парола:</label>
		<input type="password" class="form-control input-lg" id="password" name="password" required="" />
		<div class="pwstrength_viewport_progress"></div>
			<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">ВХОД</button>
		<div>
            <a href="register.php">Регистрация</a>
        </div>		
	</form>
	</section>  
</div>
  
<div class="col-md-4"></div>
	
<?php echo $errordiv; ?>
	<div id="validatemsg" class="alert alert-danger"><?php echo $validatemsg; ?></div>
</div>

</body>
</html>