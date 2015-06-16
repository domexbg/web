-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for books
CREATE DATABASE IF NOT EXISTS `books` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `books`;


-- Dumping structure for table books.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_name` varchar(250) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table books.authors: ~3 rows (approximately)
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` (`author_id`, `author_name`) VALUES
	(1, 'Иван Вазов'),
	(2, 'Йордан Йовков'),
	(3, 'Христо Ботев');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;


-- Dumping structure for table books.books
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_title` varchar(250) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table books.books: ~3 rows (approximately)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`book_id`, `book_title`) VALUES
	(1, 'Под игото'),
	(2, 'Епопея на забравените'),
	(3, 'Старопланински легенди');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;


-- Dumping structure for table books.books_authors
CREATE TABLE IF NOT EXISTS `books_authors` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  KEY `book_id` (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table books.books_authors: ~4 rows (approximately)
/*!40000 ALTER TABLE `books_authors` DISABLE KEYS */;
INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES
	(1, 1),
	(1, 3),
	(2, 1),
	(3, 2);
/*!40000 ALTER TABLE `books_authors` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
