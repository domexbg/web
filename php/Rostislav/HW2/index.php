<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
#div0 { font-size: 120%;}
#div1 { position: absolute;
	  left: 40%;
	  top: 25%;
}
#div2 { position: absolute;
	  left: 40%;
	  top: 30%;
}
#div3 { position: absolute;
	  left: 40%;
	  top: 35%;
	  zoom: 150%;
}
#validatemsg { position: absolute;
	  left: 40%;
	  top: 40%;
}
p { color: red;
	font-size: 130%;
}
</style>
</head>
<body>
<form method="post" action="index.php">
<div id="div0">
<div id="div1">
	<label for="username">Потребителско име:</label>
    <input type="text" name="username"></input>
</div>
<div id="div2">
	<label for="password">Парола:</label>
    <input type="password" name="password"></input>
</div>
<div id="div3">
	<input type="submit" value="ВХОД"></input>
</div>
</div>
</form>
<?php
$username = $password = $validatemsg = "";
if ($_SESSION and $_SESSION['username'] === 'user') { 
header('Location: files.php'); 
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);

	if ($username !== "user" or $password !== "qwerty") {
		$validatemsg = "Невалидно потребителско име или парола.";
	}
	else {
	$_SESSION['username'] = $username;
	$_SESSION['upload_dir'] = $username.".uploads";
	header('Location: files.php');
	}
}
?>
<div id="validatemsg">
<p><?php echo $validatemsg ?></p>
</div>
</body>
</html>