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
.container2 {
	padding: 5px;
	background-color: lightgrey;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.darkred {
	color: darkred;
}
h1 {
    text-decoration: underline;
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
#new {
	float: left;
	text-align: center;
	font-weight: bold; 
}
#div_new {
	height: 50px;
}
#btn_back {
	font-weight: bold; 
	text-align: center;
	float: right;
	width: 100px;
}
#empty_id {
	color: red;
	font-weight: bold;
}
.del {
	font-weight: bold;
	zoom: 80%;
	width: 100%;
}
#deltd {
	width: 10%;
}
</style>
</head>
<body>
<?php
	$search = "";
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
<div class="container2">
<?php
	echo "<div class='msg_container'>";
	if (empty($_GET['id']) or intval($_GET['id']) === 0 or !isset($_SESSION['books'][intval($_GET['id'])])) {
		echo "<div id='empty_id'>Върнете се назад и изберете книга.</div>";
	}
	else {
		$book_id = intval(test_input($_GET['id']));
		$user = "";
		$_SESSION['url_id'] = $book_id;
		$title = $_SESSION['books'][$book_id]['title'];
		echo "<div><h1>$title</h1></div>";
		$authors = array();
		foreach ($_SESSION['books'][$book_id]['authors'] as $key => $name) {
			$authors[] = "<a href='booksfromauthor.php?id=$key'>" . $name . "</a>";
		}
		echo "<p>Автори: " . implode(', ', $authors) . "</p>";
		$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
		get_comments($connection, $book_id, $user);
		if ($_SESSION and isset($_SESSION['username'])) {
			echo "<div id='div_new'><a href='new.php'><button id='new' class='btn btn-default navbar-btn btn-primary' type='button' name='new'>Добави коментар</button></a></div>";
		}
		echo "</div>";
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$id = key($_POST);
		if (strpos($id, "del") === 0) {
			$id = str_replace("del", "", $id);
			$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
			delcomment($connection, $id);
		}
	}
?>
</div>
</body>
</html>