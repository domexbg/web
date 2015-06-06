<?php
require "config.php";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function test_msg($data) {
	$data = nl2br($data);
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
	$sql = "SELECT ID FROM messages";
	$result = mysqli_query($connection, $sql);
	
	while ($getid = mysqli_fetch_assoc($result)) {
		if ($getid['ID']) {
		$id = $getid['ID'];
		$sql_date = mysqli_query($connection, "SELECT Datestamp FROM messages WHERE ID = $id");
		$date = mysqli_fetch_all($sql_date);
		$sql_author = mysqli_query($connection, "SELECT Author FROM messages WHERE ID = $id");
		$author = mysqli_fetch_all($sql_author);
		$sql_topic = mysqli_query($connection, "SELECT Topic FROM messages WHERE ID = $id");
		$topic = mysqli_fetch_all($sql_topic);
		$sql_content = mysqli_query($connection, "SELECT Content FROM messages WHERE ID = $id");
		$content = mysqli_fetch_all($sql_content);
		echo "<div><table><tr><td><b><span class='darkblue'>" . $author[0][0] . "</span></b> - <span class='darkred'>" . $date[0][0] . "</span> - <b>" . $topic[0][0] . "</b></td>";
		if ($_SESSION['username'] === "admin") {
			echo "<td id='deltd'><form method='post' action='main.php'><input class='btn btn-danger del' name='del$id' type='submit' value='Изтрий'></form></td>";
		}
		echo "</tr><tr><td>" . $content[0][0] . "</td></tr></table></div>";
		}
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

function delmsg($connection, $key) {
	$sql = "DELETE FROM messages WHERE ID = $key;";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
	header("Location: main.php");
}
?>