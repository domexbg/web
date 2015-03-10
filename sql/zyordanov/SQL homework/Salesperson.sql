CREATE TABLE IF NOT EXISTS `Salesperson` (
  `ID` int(100) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  `Salary` int(255) DEFAULT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Salesperson` (`ID`,`Name`, `Age`, `Salary`) VALUES
	(1,'Abe', 61, 140000),
	(2,'Bob', 34, 44000),
	(5,'Chris', 34, 40000),
	(7,'Dan', 41, 52000),
	(8,'Ken', 57, 115000),
	(11,'Joe', 38, 38000);