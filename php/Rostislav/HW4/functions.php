<?php
require "config.php";

function get_books($connection, $search) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	if ($search === "") {
		$sql = "SELECT * FROM books JOIN books_authors ON books.book_id = books_authors.book_id	JOIN authors ON authors.author_id = books_authors.author_id;";
	}
	else {
		$sql = "SELECT * FROM books JOIN books_authors ON books.book_id = books_authors.book_id	JOIN authors ON authors.author_id = books_authors.author_id WHERE book_title LIKE '%$search%';";
	}
		mysqli_query($connection, "SET NAMES utf8");
		$result = mysqli_query($connection, $sql);
		$books = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$books[$row['book_id']]['title'] = $row['book_title'];
			$books[$row['book_id']]['authors'][$row['author_id']] = $row['author_name'];
		}
		if (empty($books)) {
			echo "<tr><td colspan='2'>Няма намерени резултати.</td></tr>";
		}
		foreach ($books as $book) {
			echo "<tr><td>" . $book['title'] . "</td><td>";
			$authors = array();
			foreach ($book['authors'] as $key => $name) {
				$authors[] = "<a href='booksfromauthor.php?id=$key'>" . $name . "</a>";
			}
			echo implode(', ', $authors) . "</td></tr>";
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

function get_all_from_author($connection, $auth_id) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT * FROM books
		JOIN books_authors ON books.book_id = books_authors.book_id
		JOIN authors ON authors.author_id = books_authors.author_id";
	$result = mysqli_query($connection, $sql);
	$books = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$books[$row['book_id']]['title'] = $row['book_title'];
        $books[$row['book_id']]['authors'][$row['author_id']] = $row['author_name'];
	}
	foreach ($books as $book) {
		$author_ids = array($book['authors']);
		foreach ($author_ids as $key) {
			if (array_key_exists($auth_id, $key)) {
				echo "<tr><td>" . $book['title'] . "</td><td>";
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
?>