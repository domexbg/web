<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
<table id="table1" class="table table-bordered">
<th>Файл</th>
<th>Име</th>
<th>Размер</th>

<?php

$none = "";
$nonediv = "<div class='alert alert-danger hidden'>";
$dir = $_SESSION['upload_dir'];
if (!is_dir($dir)) {
	mkdir($dir);
}
$dirlist = scandir($dir);
$counter = 0;
foreach ($dirlist as $file) {
	if (empty($dirlist[2])) {
		$none = "Не са открити файлове.";
		$nonediv = "<div class='alert alert-danger'>";
		break;
	}
	if ($file === "." or $file === "..") {
		continue;
	}
	$counter++;
	$fpath = $_SESSION['upload_dir'] . "/" . $file;
	$fsize = filesize($fpath) / 1024;
	$fsize = floor($fsize);
	echo "<tr>";
    echo "<td>$counter.</td>";
	echo "<td><a href='" . $_SESSION['upload_dir'] . "/$file'" . " download target='_blank'>$file</a></td>";
	echo "<td>$fsize KB</td>";
	echo "</tr>";
    }
?>

</table>
</div>
<?php echo $nonediv; ?><p id="none"><?php echo $none; ?></p></div>

<div class="container form-group">
<form action="files.php" method="post" enctype="multipart/form-data">
	<span class="glyphicon glyphicon-upload" aria-hidden="true"></span><input id="choosefile" name="fileToUpload" type="file">
    <button type="submit" class="btn btn-default navbar-btn btn-primary">Качване на файл</button>
</form>
</div>

<?php
$target_dir = $_SESSION['upload_dir'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$target_file = $target_dir . "/" . basename($_FILES["fileToUpload"]["name"]);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	header('Location: files.php');
}
?>
</div>
</body>
</html>