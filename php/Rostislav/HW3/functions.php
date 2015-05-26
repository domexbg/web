<?php
require "config.php";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	
function logincheck($connection, $username, $password) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM userpass";
	$result = mysqli_query($connection, $sql);
	
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row["user"] === $username and $row["password"] === $password){
			return true;
		}
	}
return false;
}

function regcheck($connection, $reguser, $regpass, $regpass2) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	$sql = "SELECT user FROM userpass";
	$result = mysqli_query($connection, $sql);
	
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['user'] === $reguser){
			return 1;
		}
	}
	if ($regpass !== $regpass2) {
		return 5;
	}
	if (strlen($reguser) < 5) {
		return 2;
	}
	if (strlen($regpass) < 5) {
		return 3;
	}
return 4;
}
?>