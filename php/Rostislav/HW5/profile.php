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
body {
	background-image: url("letters-and-words.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
.container1 {
	text-align: center;
	margin: auto;
	margin-top: 2%;
	height: 45px;
	width: 50%;
	background-color: lightgrey;
	padding: 5px;
	border-radius: 10px;
}
#container2 {
	padding: 5px;
	background-color: lightgrey;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
table tr,td {
	padding: 5px;
}
table, td {
	border-radius: 5px;
}
table { 
	background-color: white;
	margin-bottom: 10px;
	border: 1px solid darkgrey;
	border-collapse: separate;
 	width: 100%;
}
div { 
	border-radius: 10px;
	margin-top: 10px; 
	margin-bottom: 10px;
}
.msg_container {
	border-radius: 5px;
	margin-left: auto;
	margin-right: auto;
	width: 80%;
}
.del {
	font-weight: bold;
	zoom: 80%;
	width: 100%;
}
#deltd {
	width: 10%;
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
#loginfo {
	padding: 7px;
	float: left;
	font-weight: bold;
}
#btn_login {
	margin-left: 5px;
	font-weight: bold; 
	text-align: center;
	float: right;
	width: 100px;
}
#btn_back {
	font-weight: bold; 
	text-align: center;
	float: right;
	width: 100px;
}
h1 {
	text-align: center;
}
</style>
</head>
<body>
<?php
	$back_btn = "<a href='index.php'><button id='btn_back' class='btn btn-primary' type='button'>Назад</button></a>";
	if ($_SESSION and isset($_SESSION['username'])) {
		$username = ucfirst($_SESSION['username']);
		$login_btn = "<a href='logout.php'><button id='btn_login' class='btn btn-primary' type='button'>Изход</button></a>";
	}
	else {
		$username = "Гост";
		$login_btn = "<a href='login.php'><button id='btn_login' class='btn btn-primary' type='button'>Вход</button></a>";
	}
?>
<div class="container1">
	<span id='loginfo'>Влезли сте като: <?php echo $username . "</span>" . $login_btn . $back_btn; ?>
</div>
	<?php
		$book_id = "";
		if (isset($_GET['user'])) {
			$user = test_input($_GET['user']);
			$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
			$check = check_get_user($connection, $user);
			if ($check) {
				mysqli_close($connection);
				echo "<div class='centered'><span class='alert alert-danger' role='alert' autofocus>Потребителят не съществува или няма негови коментари.</span></div>";
			}
			else {
				echo "<div id='container2' class='container'><h1>Коментари на потребител $user</h1><div class='msg_container'>";
				get_comments($connection, $book_id, $user);
			}
		}			
	?>
</div>
</body>
</html>