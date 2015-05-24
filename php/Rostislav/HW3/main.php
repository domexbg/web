<?php
session_start();
require "config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
#table1	{
	padding: 5px;
	margin: 20px;
	zoom: 150%;
}
table#table1 td, th {
	padding: 5px;
}
div { margin: 20px; }
form { zoom: 150%; }
#none {
	color: red;
	font-size: 18px;
}
#logout { 
margin-left: 13%;
zoom: 150%;
}
#logged { zoom: 150%; }
#choosefile { display: inline; }
.hidden { display: none; }
</style>
</head>
<body>
<div class="col-md-4">
<?php
if (!$_SESSION) {
	header ('Location: index.php');
}
?>
<div class="container">
<span id='logged'>Влезли сте като: <b><?php echo $_SESSION['username'] ?></b></span>
<a href="logout.php"><button id="logout" class="btn btn-default navbar-btn btn-primary" type="button" name="logout">Изход</button></a>
</div>

<div>
<a href="new.php"><button id="new" class="btn btn-default navbar-btn btn-primary" type="button" name="new">Ново съобщение</button></a>
</div>

<div>
<p>Дата:</p>
<p>Автор:</p>
<p>Тема:</p>
<p>Съдържание:</p>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
}
?>
</div>
</body>
</html>