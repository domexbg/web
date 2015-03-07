CREATE TABLE IF NOT EXISTS `persons` (
  `PersonID` int(11) DEFAULT NULL AUTO_INCREMENT,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  PRIMARY KEY (PersonID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `persons` (`LastName`, `FirstName`, `Address`, `City`) VALUES
	('Yordanov', 'Zlatko', 'Drujba', 'Sofia'),
	('Petrov', 'Stefcho', 'Mladost', 'Sofia'),
	('Petrov', 'Stefcho', 'Mladost', 'Sofia'),
	('Ivanov', 'Ivan', 'Center', 'Sofia'),
	('Petrov', 'Ivan', 'Mladost', 'Plovdiv'),
	('Georgiev', 'Nikolay', 'Lulin', 'Sofia');
