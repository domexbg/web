<?php
require "config.php";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function test_msg ($msg) {
	$data = trim($msg);
	$data = htmlspecialchars($msg);
	return $msg;
}
	
function logincheck($connection, $username, $password) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM userpass";
	$result = mysqli_query($connection, $sql);
	
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row["user"] === $username and $row["password"] === $password){
			mysqli_close($connection);
			return true;
		}
	}
mysqli_close($connection);
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
			mysqli_close($connection);
			return 1;
		}
	}
	if (strlen($reguser) < 5) {
		mysqli_close($connection);
		return 2;
	}
	if (strlen($regpass) < 5) {
		mysqli_close($connection);
		return 3;
	}
	if ($regpass !== $regpass2) {
		mysqli_close($connection);
		return 4;
	}
	if ($regpass === $reguser) {
		mysqli_close($connection);
		return 5;
	}
	return 6;
}

function getmsg($connection) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT COUNT(*) FROM messages";
	$result = mysqli_query($connection, $sql);
	$msgcount = mysqli_fetch_all($result);
	
	for ($i = 1; $i <= intval($msgcount[0][0]); $i++) {
		$sql_date = mysqli_query($connection, "SELECT Datestamp FROM messages WHERE ID = $i");
		$date = mysqli_fetch_all($sql_date);
		$sql_author = mysqli_query($connection, "SELECT Author FROM messages WHERE ID = $i");
		$author = mysqli_fetch_all($sql_author);
		$sql_topic = mysqli_query($connection, "SELECT Topic FROM messages WHERE ID = $i");
		$topic = mysqli_fetch_all($sql_topic);
		$sql_content = mysqli_query($connection, "SELECT Content FROM messages WHERE ID = $i");
		$content = mysqli_fetch_all($sql_content);
		
		echo "<div><table><tr><td><b><span class='darkblue'>" . $author[0][0] . "</span></b> - <span class='darkred'>" . $date[0][0] . "</span> - <b>" . $topic[0][0] . "</b></td></tr>";
		echo "<tr><td>" . $content[0][0] . "</td></tr></table></div>";
		
	}
	mysqli_close($connection);
}

function newmsg($connection, $author, $topic, $content) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "INSERT INTO messages (Author, Topic, Content) VALUES ('$author', '$topic', '$content');";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
}

?>