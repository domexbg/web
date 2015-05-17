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
p { color: red;}
</style>
</head>
<body>

<table id="table1">
<th>Файл</th>
<th>Име</th>

<?php
$none = "";
$dir = "Uploads";
$dirlist = scandir($dir);
$counter = 0;
foreach ($dirlist as $file) {
	if (empty($dirlist[2])) {
		$none = "Не са открити файлове.";
		break;
	}
	if ($file == "." or $file == "..") {
		continue;
	}
	$counter++;
	echo "<tr>";
    echo "<td>$counter.</td>";
	echo "<td><a href='Uploads/$file' download target='_blank'>$file</a></td>";
	echo "</tr>";
    }
?>

</table>
<div><p><?php echo $none; ?></p></div>
<div>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Качване на файл" name="submit">
</form>
</div>

</body>
</html>