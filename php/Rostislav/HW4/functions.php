<?php
require "config.php";

function get_all($connection) {
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
		echo "<tr><td>" . $book['title'] . "</td><td>";
		$authors = array();
		foreach ($book['authors'] as $key => $name) {
			$authors[] = "<a href='booksfromauthor.php?id=$key'>" . $name . "</a>";
		}
		echo implode(', ', $authors) . "</td></tr>";
	}
	
}

function getauthors($connection) {
	if (!$connection) {
		die("Connection to DB failed: " . mysqli_connect_error());
	}
	mysqli_query($connection, "SET NAMES utf8");
	$sql = "SELECT author_name FROM authors;";
	$result = mysqli_query($connection, $sql);
	while ($authors = mysqli_fetch_row($result)) {
		foreach ($authors as $author) {
			echo "<tr><td>" . $author . "</td></tr>";
		}
	}
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
?>