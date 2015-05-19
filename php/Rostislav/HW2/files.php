<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
#table1	{
	border: 2px solid black;
	border-collapse: collapse;
	padding: 5px;
	margin: 20px;
	zoom: 200%;
}
table#table1 td, th {
	border: 2px solid black;
	border-collapse: collapse;
	padding: 5px;
}
div { margin: 20px; }
form { zoom: 150%; }
#none { color: red;}
#logout { 
margin-left: 13%;
zoom: 150%;
}
#logged { zoom: 150%; }
</style>
</head>
<body>

<?php
if (!$_SESSION) {
	header ('Location: index.php');
}
?>
<div>
<span id='logged'>Влезли сте като: <b><?php echo $_SESSION['username'] ?></b></span>
<a href="logout.php"><button id="logout" type="button" name="logout">Изход</button></a>
</div>

<table id="table1">
<th>Файл</th>
<th>Име</th>

<?php

$none = "";
$dir = $_SESSION['upload_dir'];
if (!is_dir($dir)) {
	mkdir($dir);
}
$dirlist = scandir($dir);
$counter = 0;
foreach ($dirlist as $file) {
	if (empty($dirlist[2])) {
		$none = "Не са открити файлове.";
		break;
	}
	if ($file === "." or $file === "..") {
		continue;
	}
	$counter++;
	echo "<tr>";
    echo "<td>$counter.</td>";
	echo "<td><a href='".$_SESSION['upload_dir']."/$file'"." download target='_blank'>$file</a></td>";
	echo "</tr>";
    }
?>

</table>
<div><p id="none"><?php echo $none; ?></p></div>

<div>
<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <input type="submit" value="Качване на файл">
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

</body>
</html>