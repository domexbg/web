<?php
session_start();
require "config.php";
require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
.form-control {
	background-color: lightgrey;
	border: 0px;
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
	@include box-sizing(border-box);

	&:focus {
	  z-index: 2;
	}
}
body {
	background-image: url("letters-and-words.jpg") ;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
#container {
	background-color: lightgrey;
	border-radius: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 15%;
	width: 30%;
	text-align: center;
}
#content {
	resize: none;
	width: 80%;
	height: 120px;
}
p {
	font-size: 10px;
	font-weight: bold;
}
</style>
</head>
<body>
<div id="container" class="container">
	<form id="new" class="form-control" method="post" action="new.php">
		<div>
			<label for="content">Съдържание:</label><br>
			<textarea id="content" name="content" maxlength="250" required autofocus></textarea>
			<p>(макс. 250 символа)</p>
		</div>
		<div>
			<?php echo "<a id='btn_back' href='book.php?id=" . $_SESSION['url_id'] . "'>"; ?>
				<input type="button" class="btn btn-primary" value="Назад">
			</a>
			<input type="submit" class="btn btn-primary" value="Публикувай"></input>
		</div>
	</form>
</div>
<?php
if (!$_SESSION) {
	header ('Location: index.php');
	}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);
	$new_author = $_SESSION['username'];
	$new_author = ucfirst($new_author);
	$new_comment = test_msg($_POST['content']);
	$book_id = $_SESSION['url_id'];
	newcomment($connection, $book_id, $new_author, $new_comment);
	$url = "location: book.php?id=" . $_SESSION['url_id'];
	header("$url");
}
?>
</body>
</html>