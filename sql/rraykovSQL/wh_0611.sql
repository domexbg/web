CREATE TABLE Salesperson (
	ID  INT(11) NOT NULL,
	Name VARCHAR(255) NOT NULL,
	Age INT(11) NOT NULL, 
	Salary INT (11) NOT NULL,
	PRIMARY KEY (ID)
	)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

CREATE TABLE Customer (
	ID  INT(11) NOT NULL,
	Name VARCHAR(255) NOT NULL,
   City VARCHAR(255) NOT NULL, 
	Industry_Type VARCHAR(255) NOT NULL,
	PRIMARY KEY (ID)
	)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

CREATE TABLE Orders (
	Number INT(11) NOT NULL,
	Order_date DATE NOT NULL,
	cust_id INT(11) NOT NULL,
	salesperson_id INT(11) NOT NULL,
	Amount INT(11) NOT NULL,
	PRIMARY KEY (Number)
	)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

INSERT INTO Salesperson (
	ID,
	Name,
	Age,
	Salary
	)
VALUES 
(1,'Abe',61,140000),
(2,'Bob',34,44000),
(5,'Chris',34,40000),
(7,'Dan',41,52000),
(8,'Ken',57,115000),
(11,'Joe',38,38000);

INSERT INTO Customer (
	ID,
	Name,
	City,
	Industry_Type
	)
VALUES
(4,'Samsonic','pleasant','J'),
(6,'Panasung','oaktown','J'),
(7,'Samony','jackson','B'),
(9,'Orange','jackson','B');

INSERT INTO Orders (
	Number,
	Order_date,
	cust_id,
	salesperson_id,
	Amount	
	)
VALUES
(10,'1996-08-02',4,2,540),
(20,'1999-01-30',4,8,1800),
(30,'1995-07-14',9,1,460),
(40,'1998-01-29',7,2,2400),
(50,'1998-02-03',6,7,600),
(60,'1998-03-02',6,7,720),
(70,'1998-05-06',9,7,150);
