/head>

<body>
	<form method="POST" action="entry.php"
	<a id="Link1" href="index.php"> Spisak </a> 
	</br>
	Ime <input id="name1" type="text" />
	</br>
	Suma <input id="sum1" type="text" />
	</br>
	Vid:
	<select id="menu1">
		<option id="food" value="food"> Hrana </option>
		<option id="drinks" value="drinks"> Drinks </option>
		<option id="clothes" value="clothes"> Clothes </option>
		<option id="utilities" value="utilities"> Utilities </option>
		<option id="services" value="services"> Services </option>
		<option id="other" value="other"> Other </option>
	</select>
	</br>
	<input id="button1" type="submit" value="Dobavi" />
	</form>
<?php
	if ( $_POST)
	{
		echo "<pre>";
		echo var_dump($_POST);
		echo "</pre>";
		$line = $_POST["name"] . PHP_EQL . ";" . $_POST["amount"] . PHP_EQL . ";" .
		$_POST["group"] . PHP_EQL;
		file_put_contents("data.txt), $line, FILE_APPEND | LOCK_EX);
		if ($res) echo " <p> Zapisat beshe uspeshen! </p>"
	}

?>

</body>
</html> 
