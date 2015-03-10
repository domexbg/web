CREATE TABLE IF NOT EXISTS `Orders` (
`Number` int(255) DEFAULT NULL,
`Order_date` varchar(255) DEFAULT NULL,
`Cust_id` int(255) DEFAULT NULL,
`salesperson_id` int(255) DEFAULT NULL,
`Amount` int(255) DEFAULT NULL,
PRIMARY KEY (Number)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Orders` (`Number`,`Order_date`,`Cust_id`,`salesperson_id`,`Amount`) VALUES
(10,'8/2/96',4,2,540),
(20,'1/30/99',4,8,1800),
(30,'7/14/95',9,1,460),
(40,'1/29/98',7,2,2400),
(50,'2/3/98',6,7,600),
(60,'3/2/98',6,7,720),
(70,'5/6/98',9,7,150);