<?php
session_start();
require "config.php";
require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
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

#container { 
	margin-left: auto;
	margin-right: auto;
	margin-top: 15%;
	width: 35%;
	text-align: center;
}

#content {
	resize: none;
	width: 70%;
	height: 120px;
}
p {
	font-size: 10px;
	font-weight: bold;
}

#topic { width: 45%}
</style>
</head>
<body>
<div id="container" class="container">
	<form id="new" class="form-control" method="post" action="new.php">
		<div>
			<label for="topic">Тема:</label><br>
			<input id="topic" type="text" name="topic" maxlength="50" required autofocus></input>
			<p>(макс. 50 символа)</p>
		</div>
		<div>
			<label for="content">Съдържание:</label><br>
			<textarea id="content" name="content" maxlength="250" required></textarea>
			<p>(макс. 250 символа)</p>
		</div>
		<div>
			<a id="btn_back" href="main.php">
				<input type="button" class="btn btn-primary" value="Назад">
			</a>
			<input type="submit" class="btn btn-primary" value="Публикувай"></input>
		</div>
	</form>
</div>
<?php
if (!$_SESSION) {
	header ('Location: index.php');
	}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	$new_author = $_SESSION['username'];
	$new_author = ucfirst($new_author);
	$new_topic = test_msg($_POST['topic']);
	$new_content = test_msg($_POST['content']);
	newmsg($connection, $new_author, $new_topic, $new_content);
	header("location: main.php");
}
?>
</body>
</html>