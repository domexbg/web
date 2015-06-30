<?php
require "config.php";

function get_books($connection, $search) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	if ($search === "") {
		$sql = "SELECT *,(SELECT COUNT(*) FROM comments WHERE comments.book_id = books.book_id) AS 'comments' FROM books
			JOIN books_authors ON books.book_id = books_authors.book_id	
			JOIN authors ON authors.author_id = books_authors.author_id;";
	}
	else {
		$sql ="SELECT *,(SELECT COUNT(*) FROM comments WHERE comments.book_id = books.book_id) AS 'comments' FROM books
			JOIN books_authors ON books.book_id = books_authors.book_id	
			JOIN authors ON authors.author_id = books_authors.author_id WHERE book_title LIKE '%$search%';";
	}
		mysqli_query($connection, "SET NAMES utf8");
		$result = mysqli_query($connection, $sql);
		$books = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$books[$row['book_id']]['title'] = $row['book_title'];
			$books[$row['book_id']]['authors'][$row['author_id']] = $row['author_name'];
			$books[$row['book_id']]['comments'] = $row['comments'];
		}
		if (empty($books)) {
			echo "<tr><td colspan='3'>Няма намерени резултати.</td></tr>";
		}
		$_SESSION['books'] = array();
		foreach ($books as $key => $book) {
			$_SESSION['books'][$key] = $book;
			echo "<tr><td><a href='book.php?id=" . $key . "'>" . $book['title'] . "</a></td><td>";
			$authors = array();
			foreach ($book['authors'] as $author_id => $name) {
				$authors[] = "<a href='booksfromauthor.php?id=$author_id'>" . $name . "</a>";
			}
			echo implode(', ', $authors) . "</td><td><a href='book.php?id=" . $key . "'>" . $book['comments'] . "</a></td></tr>";
		}
	
}

function getauthors($connection, $sort) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	if ($sort === "Възх. сортиране") {
		$sql = "SELECT * FROM authors ORDER BY author_name;";
	}
	else if ($sort === "Низх. сортиране") {
		$sql = "SELECT * FROM authors ORDER BY author_name DESC;";
	}
	else {
		$sql = "SELECT * FROM authors;";
	}
	$result = mysqli_query($connection, $sql);
	while ($authors = mysqli_fetch_assoc($result)) {
		echo "<tr><td><a href='booksfromauthor.php?id=" . $authors['author_id'] . "'>" . $authors['author_name'] . "</a></td></tr>";
	}
}

function check_get_id($connection, $getid) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM authors WHERE author_id = '$getid';";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) === 0) {
		return 1;
	}
	return 0;
}

function check_get_user($connection, $user) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	$sql = "SELECT Author FROM comments WHERE Author = '$user';";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) === 0) {
		return 1;
	}
	return 0;
}

function get_all_from_author($connection, $auth_id) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT * FROM books
		JOIN books_authors ON books.book_id = books_authors.book_id
		JOIN authors ON authors.author_id = books_authors.author_id;";
	$result = mysqli_query($connection, $sql);
	$books = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$books[$row['book_id']]['title'] = $row['book_title'];
        $books[$row['book_id']]['authors'][$row['author_id']] = $row['author_name'];
	}
	foreach ($books as $book_id => $book) {
		$author_ids = array($book['authors']);
		foreach ($author_ids as $key) {
			if (array_key_exists($auth_id, $key)) {
				echo "<tr><td><a href='book.php?id=" . $book_id . "'>" . $book['title'] . "</a></td><td>";
				$authors = array();
				foreach ($book['authors'] as $key => $name) {
					$authors[] = "<a href='booksfromauthor.php?id=$key'>" . $name . "</a>";
				}
				echo implode(', ', $authors) . "</td></tr>";
			}
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function addauthor($connection, $newauthor) {
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT * FROM authors WHERE author_name = '$newauthor';";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		return false;
	}
	else {
		$sql = "INSERT INTO authors (author_name) VALUES ('$newauthor');";
		mysqli_query($connection, $sql);
		return true;
	}
}

function selectauthors($connection) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT * FROM authors;";
	$result = mysqli_query($connection, $sql);
	while ($authors = mysqli_fetch_assoc($result)) {
		echo "<option value='" . $authors['author_id'] . "'>" . $authors['author_name'] . "</option>";
	}
}

function addbook($connection, $newbook, $newauthors) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT * FROM books WHERE book_title = '$newbook';";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		return false;
	}
	else {
		$sql = "INSERT INTO books (book_title) VALUES ('$newbook');";
		mysqli_query($connection, $sql);
		$sql = "SELECT book_id FROM books WHERE book_title = '$newbook';";
		$result = mysqli_query($connection, $sql);
		$newbookid = mysqli_fetch_all($result);
		$newbookid = intval($newbookid[0][0]);
		foreach ($newauthors as $newauthor) {
			$authorid = $newauthor;
			$sql = "INSERT INTO books_authors (book_id, author_id) VALUES ('$newbookid', '$authorid')";
			mysqli_query($connection, $sql);
		}
		return true;
	}
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
	if (strlen(utf8_decode($reguser)) < 3) {
		mysqli_close($connection);
		return 2;
	}
	if (strlen(utf8_decode($regpass)) < 3) {
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

function get_comments($connection, $book_id, $user) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8;");
	if ($user === "") {
		$sql = "SELECT ID FROM comments WHERE book_id = $book_id;";
	}
	else {
		$sql = "SELECT ID FROM comments WHERE Author = '$user';";
	}
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) === 0 AND $user === "") {
		echo "<div><table><tr><td>Няма коментари към тази книга.</td></tr></table></div>";
	}
	while ($get = mysqli_fetch_assoc($result)) {
		$id = $get['ID'];
		if ($user === "") {
			$sql_date = mysqli_query($connection, "SELECT Datestamp FROM comments WHERE ID = $id;");
			$date = mysqli_fetch_all($sql_date);
			$sql_author = mysqli_query($connection, "SELECT Author FROM comments WHERE ID = $id;");
			$author = mysqli_fetch_all($sql_author);
			$sql_content = mysqli_query($connection, "SELECT Content FROM comments WHERE ID = $id;");
			$content = mysqli_fetch_all($sql_content);
			echo "<div><table><tr><td><b><span><a href='profile.php?user=" . $author[0][0] . "'>" . $author[0][0] . "</a></span></b> - <span class='darkred'>" . $date[0][0] . "</span></td>";
			
		}
		else {
			$sql_date = mysqli_query($connection, "SELECT Datestamp FROM comments WHERE Author = '$user' AND ID = $id;");
			$date = mysqli_fetch_all($sql_date);
			$sql_book = mysqli_query($connection, "SELECT books.book_id,book_title FROM books
				JOIN comments
				ON comments.book_id = books.book_id
				WHERE comments.author = '$user' AND comments.ID = $id;");
			$book = mysqli_fetch_assoc($sql_book);
			$sql_content = mysqli_query($connection, "SELECT Content FROM comments WHERE Author = '$user' AND ID = $id;");
			$content = mysqli_fetch_all($sql_content);
			echo "<div><table><tr><td><b><span><a href='profile.php?user=$user'>$user</a></span></b> - <span class='darkred'>" . $date[0][0] . "</span> - <b>За книга: </b><a href='book.php?id=" . $book['book_id'] . "'><b>" . $book['book_title'] . "</b></a></td>";			
		}
		if (isset($_SESSION['username']) and $_SESSION['username'] === "admin") {
			echo "<td id='deltd'><form method='post' action='book.php'><input class='btn btn-danger del' name='del$id' type='submit' value='Изтрий'></form></td>";
		}
		echo "</tr><tr><td>" . $content[0][0] . "</td></tr></table></div>";
	}
	mysqli_close($connection);
}

function test_msg($data) {
	$data = nl2br($data);
	return $data;
}

function newcomment($connection, $book_id, $author, $content) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "INSERT INTO comments (book_id, Author, Content) VALUES ('$book_id', '$author', '$content');";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
}

function delcomment($connection, $id) {
	$sql = "DELETE FROM comments WHERE ID = $id;";
	mysqli_query($connection, $sql);
	mysqli_close($connection);
	$url = "location: book.php?id=" . $_SESSION['url_id'];
	header("$url");
}
?>