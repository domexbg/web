CREATE TABLE Customers (
	ID  INT(11) NOT NULL AUTO_INCREMENT,
	Customer_Name VARCHAR(255) NOT NULL ,
	Customer_VAT VARCHAR(255) NULL,
	Addres VARCHAR(255) NOT NULL ,
	City VARCHAR(255) NOT NULL , 
	Country VARCHAR(255) NOT NULL
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;
CREATE TABLE Orders (
	ID  INT(11) NOT NULL AUTO_INCREMENT,
	Customer_ID INT,
	Customer_Order_ID VARCHAR(255) NOT NULL,
	Order_Date DATETIME NOT NULL ,
	Quantity INT NOT NULL ,
	Price FLOAT(6,5) NOT NULL ,
	PRIMARY KEY (ID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

INSERT INTO Customers (
        Customer_Name,
	Customer_VAT,
	Addres ,
	City , 
	Country)
VALUES ('MAGNA','123456','Rue Nagondage 1','Barcelona','Spain'),
('NIDEK','098890','Skarbowa 1','Nipelomize','Poland'),
('ARSENAL AD','BG2223123','Bote2','Kazanlyk','Bulgaria'),
('TVH N.V.','BE5763833','Monblan 34','98393Waregem','Belgium'),
('EUROFEDERN','DE234098890','Sandpoh-15','26899Rhede','Germany');

INSERT INTO Orders (
	Customer_ID,
	Customer_Order_ID,
	Order_Date,
	Quantity ,
	Price ,
VALUES (1,'M098_2014',NOW(),200000,20.098),
(2,'123_2014',NOW(),1000000,0.005),
(3,'2014_WE',NOW(),5000,1.05),
(4,'ARM098_2014',NOW(),35000,0.008),
(5,'20142910',NOW(),10200000,0.000028);
