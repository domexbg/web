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
	background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center
		fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
table tr,td {
	padding: 5px;
}
table, td {
	border-radius: 5px;
}
table { 
	border: 1px solid grey;
	border-collapse: separate;
 	width: 100%;
}

div { 
	border-radius: 20px;
	margin: 10px; 
}

#logout {
	font-weight: bold; 
	text-align: center;
	float: right; 
}

.hidden { display: none; }

#new {
	margin-left: auto;
	margin-left: auto;
	text-align: center;
	font-weight: bold; 
}

#div_new { text-align: center; }

.msg_container {
	background-color: white;
	margin-left: auto;
	margin-right: auto;
	width: 80%;

}
.container {
	background-color: white;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.darkred { color: darkred; }
.darkblue { color: darkblue; }
.del {
	zoom: 65%;
	width: 100%;
}
#deltd {
	width: 10%;
}
</style>
</head>
<body>
	<div class="container">
		<span id='logged'>Влезли сте като: <b><?php echo ucfirst($_SESSION['username']); ?></b></span>
		<a href="logout.php"><button id="logout" class="btn btn-default navbar-btn btn-primary" type="button" name="logout">Изход</button></a>
		<?php
		if (!$_SESSION) {
			header ('Location: index.php');
		}
		
		echo "<div class='msg_container'>";
		$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
		getmsg($connection);
		echo "</div>";
		
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			foreach ($_POST as $key) {
				$key = key($_POST);
				if (strpos($key, "del") === 0) {
					$key = str_replace("del", "", $key);
					$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
					delmsg($connection, $key);
				}
			}
		}
		?>
		<div id='div_new'>
		<a href='new.php'><button id='new' class='btn btn-default navbar-btn btn-primary' type='button' name='new'>Ново съобщение</button></a>
		</div>
	</div>
</body>
</html>