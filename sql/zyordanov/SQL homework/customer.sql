CREATE TABLE IF NOT EXISTS `Customer` (
`ID` int(255) DEFAULT NULL,
`Name` varchar(255) DEFAULT NULL,
`City` varchar(255) DEFAULT NULL,
`Industry_Type` varchar(255) DEFAULT NULL,
PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Customer` (`ID`,`Name`,`City`,`Industry_Type`) VALUES
(4,'Samsonic','pleasant','J'),
(6,'Panasung','oaktown','J'),
(7,'Samony','jackson','B'),
(9,'Orange','jackson','B');