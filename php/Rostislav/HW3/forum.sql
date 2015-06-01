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

-- Dumping database structure for forum
CREATE DATABASE IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `forum`;


-- Dumping structure for table forum.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Datestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Author` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Topic` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Content` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table forum.messages: ~5 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`ID`, `Datestamp`, `Author`, `Topic`, `Content`) VALUES
	(1, '2015-05-26 17:30:45', 'Rostislav', 'Обява', 'Продавам 100 кила ракия!'),
	(2, '2015-05-28 02:36:34', 'Zahari', 'За обявата', 'Колко струва?'),
	(3, '2015-06-29 17:39:33', 'Rostislav', 'Цена', 'Обади ми се да се спазарим.');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;


-- Dumping structure for table forum.userpass
CREATE TABLE IF NOT EXISTS `userpass` (
  `⁯ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`⁯ID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Dumping data for table forum.userpass: ~6 rows (approximately)
/*!40000 ALTER TABLE `userpass` DISABLE KEYS */;
INSERT INTO `userpass` (`⁯ID`, `user`, `password`) VALUES
	(1, 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
	(2, 'user2', '4cc2321ca77b832bd20b66f86f85bef6'),
	(3, 'user3', 'a6fc8c37c5a4ee63f21c8cddedc44e4b'),
	(16, 'zahari', 'defcb193ae59973ebfc21d622f8b414e');
/*!40000 ALTER TABLE `userpass` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
