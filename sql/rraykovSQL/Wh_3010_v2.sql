CREATE TABLE Customers (
	ID  INT(11) NOT NULL AUTO_INCREMENT,
	Customer_Name VARCHAR(255) NOT NULL ,
	Customer_VAT VARCHAR(255) NULL,
	Addres VARCHAR(255) NOT NULL ,
	City VARCHAR(255) NOT NULL , 
	Country VARCHAR(255) NOT NULL,
	PRIMARY KEY (ID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;
CREATE TABLE Orders (
	ID  INT(11) NOT NULL AUTO_INCREMENT,
	Customer_ID INT,
	Customer_Order_ID VARCHAR(255) NOT NULL,
	Order_Date DATETIME NOT NULL,
	PRIMARY KEY (ID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;
	
CREATE TABLE Article (
	ID  INT(11) NOT NULL AUTO_INCREMENT,
	Customer_Order_ID INT,
	Art_ID VARCHAR(255) NOT NULL,
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
VALUES 
('MAGNA','123456','Rue Nagondage 1','Barcelona','Spain'),
('NIDEK','098890','Skarbowa 1','Nipelomize','Poland'),
('ARSENAL AD','BG2223123','Bote2','Kazanlyk','Bulgaria'),
('TVH N.V.','BE5763833','Monblan 34','98393Waregem','Belgium'),
('EUROFEDERN','DE234098890','Sandpoh-15','26899Rhede','Germany'),
('ATLANTA ELEKTROSYSTEME GMBH','DE2340123','Oto fon Braun 5','Berlin','Germany'),
('TRETEK AD','BG12435698','Brezowsko schose 123','4000Plovdiv','Bulgaria'),
('PONZIANI','IT95236158','Garibaldi Roud 09','Rome','Italy'),
('OA Tochnost','6454638','Nabereznaia 2','Moscow','Russia'),
('INDEX-6','BG32698756','Red Flag-15','Varna','Bulgaria'),
('NIKOM TEHNO','BG32692634','Hr.Botev 2','Sofia','Bulgaria'),
('INAT TEXTILE',' ','Benarish','Erusalim','Israel'),
('WAGINER','DE334444444','Murzilka 6','Hanburg','Germany'),
('PONGO and BENGY Ltd.','BG329887756','Mama Mia','4000Plovdiv','Bulgaria'),
('ABB Bulgaria EAD','BG2222756','Brezovsko schose 20','4000Plovdiv','Bulgaria'),
('G2 Ltd.','BG44556621','Marino pole 3','4000Plovdiv','Bulgaria'),
('ERATO HOLDING','BG125369852','Bial Izvor 18','Haskovo','Bulgaria'),
('AWS Stahil GmbH','DE875326564','Kloner Weg','Berlin','Germany'),
('C.J.M.S.A.R.L.','FR5566899','Nagondag','Pari','France'),
('A.BROZOS D.MARIOUMAS','EL987456741','K.Karamanli 50 IONIA','Thessaloniki','Greece');

/*Tuk triabva da se posochat nomerata i datite na porychkite*/
INSERT INTO Orders (
	Customer_ID,
	Customer_Order_ID,
	Order_Date_ID
	)
VALUES
(1,'M098_2014',NOW()),
(2,'123_2014',NOW()),
(3,'2014_WE',NOW()),
(4,'ARM098_2014',NOW()),
(5,'20142910',NOW()),
(3,'2014_Wd',NOW()),
(3,'2014_DD',NOW()),
(6,'KAR_2014',NOW()),
(1,'МОД9',NOW()),
(10,'SYS_2PO',NOW()),
(4,;ARS_23',NOW()),
(10,'SYS_43',NOW()),
(15,'123vAR',NOW()),
(18,'BNU_VAR3',NOW()),
(20,'DS123',NOW()),
(2,'1253_2014',NOW()),
(12,'4569',NOW()),
(3,'2014_WE',NOW()),
(4,'ARM098_2014',NOW()),
(15,'2014v291',NOW()),
(13,'2014_Wd',NOW()),
(11,'2014_VAR',NOW()),
(16,'KAR_2014',NOW()),
(11,'МОD19',NOW()),
(10,'SYS_2PO',NOW()),
(14,;AR_2',NOW()),
(10,'SAS_43',NOW()),
(15,'123vAR',NOW()),
(18,'BNU_VAR3',NOW()),
(20,'DS123',NOW()),
(9,'13_2014',NOW()),
(8,'4570',NOW()),
(7,'2014_VAR3',NOW()),
(16,'KAR_2014',NOW()),
(17,'МОD30',NOW()),
(18,'SYS_2PO',NOW()),
(7,;AR_2',NOW()),
(11,'SES_43',NOW()),
(15,'123vAR',NOW()),
(18,'BNF_VAR3',NOW()),
(20,'DS1245',NOW()),
(12,'1253_2014',NOW()),
(18,'4569',NOW()),
(3,'S56_43',NOW()),
(5,'123AAR',NOW()),
(3,'BNF_VAR56',NOW()),
(4,'DS1274',NOW()),
(7,'1253_2014',NOW()),
(20,'4569',NOW());

/*Ideiata e tuk da se posochat vidovete artikuli ot dadena porychka(Order),kolichestvi i Cena*/
INSERT INTO Article (
	Customer_Order_ID,
	Art_ID,
	Quantity,
	Price
	)
VALUES
(1,'B12344',200000,20.098),
(1,'C1233',1000000,0.005),
(3,'ZWE12',5000,1.05),
(3,'5625',35000,0.008),
(3,'20142910',10200000,0.000028),
(3,'201456',200,3.10),
(3,'2014_DD',50000,0.023),
(3,'KAR_2014',80000,0,00369),
(1,'МОД9',2000000,0.000012),
(10,'SYS_2PO',36500,0.18),
(10,'ARS_23',60000,0.25),
(10,'SYS_43',18500,3.92),
(1,'123vAR',56500,0.6006),
(1,'VAR33',18569,0.36002),
(20,'DS123',36952,0.23),
(20,'125014',69850,0.00009),
(12,'4569',500,0.56),
(4,'2014_WE',5000,1.05),
(4,'982014',35000,0.008),
(15,'2014v291',25000,0.0028),
(14,'2014_Wd',200,3.10),
(11,'2014_VAR',500,0.032),
(15,'KAR22014',80000,0,00369),
(11,'МО19',200,0.0012),
(11,'S2S_2PO',36800,0.28),
(14,;AR3_2',6600,0.025),
(10,'SAS_43',180,3.92),
(10,'123vAR',56500,0.6006),
(18,'BNU_VAR3',18569,0.36002),
(20,'DS123',36952,0.23),
(9,'13_2014',98900,0.509),
(9,'4570',5060,0.502),
(7,'2014_VAR3',50000,0.002),
(16,'KAR_2014',80000,0,00369),
(17,'МОD30',2000,0.012),
(18,'SYS_2PO',3600,0.028),
(7,;AR_2',6600000,0.0025),
(7,'SES_43',100080,0.0092),
(15,'123vAR',56500,0.6006),
(18,'BNF_VAR3,18000,0.036),
(20,'DS1245',36000,0.23),
(12,'1253_2014',690,0.009),
(18,'4569',50600,0.5),
(3,'S56_43',1000,0.2),
(5,'123AAR',565,0.66),
(3,'BNF_VAR56',180000,0.0036),
(4,'DS1274',360000,0.0023),
(7,'1253_2014',690000,0.109),
(20,'4569',50600,0.35);
