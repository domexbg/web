<!DOCTYPE html>
<html>
<head>
<style>
#div1 {
	font-size: 200%; 
	border: 5px solid red;
	margin-top: 50px;
	float: left;
	padding: 50px;	
}
</style>
</head>
<body>
<div>
	<form action="index.php" method="post">
	<input id='userInput' type='text' name='userinput'><br><br>
		<input type="submit" value="Reverse">
	</form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$strl = strlen($_POST["userinput"]);
	$result = "";
	for ($i = 0; $i < $strl; $i++) 	{
	$result = $result.$_POST["userinput"][$strl-1-$i];
	}
echo "<div id='div1'>".$result."</div>";
}
?>

</body>
</html>