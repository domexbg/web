create table Salesperson (
ID int not null,
name varchar(255) not null,
age int not null,
salary int not null,
Primary key (ID)
)
collate='utf8_general_ci'
engine=MyISAM;
INSERT INTO Salesperson (id, name, age,salary)
VALUES (1,'Abe',61,140000),
       (2,'Bob',34,44000),
       (5,'Chris',34,40000),
       (7,'Dan',41,52000),
       (8,'Ken',57,115000),
       (11,'Joe',38,38000);
       
	   create table Customer (
ID int not null,
name varchar(255) not null,
City varchar(255) not null,
Industry_Type varchar(255) not null,
Primary key (ID)
)
collate='utf8_general_ci'
engine=MyISAM;
INSERT INTO Customer (id, name, City, Industry_Type)
VALUES (4,'Samsonic','pleasant','J'),
       (6,'Panasung','oaktown','J'),
       (7,'Samony','jackson','B'),
       (9,'Orange','Jackson','B');
	   	   
	   create table Orders (
Number int not null,
Order_date varchar(255) not null,
cust_id int not null,
salesperson_id int not null,
Amount int not null,
Primary key (Number)
)
collate='utf8_general_ci'
engine=MyISAM;
INSERT INTO Orders (Number, Order_date, cust_id, salesperson_id, Amount)
VALUES (10,'8/2/96',4,2,540),
       (20,'1/30/99',4,8,1800),
       (30,'7/14/95',9,1,460),
       (40,'1/29/98',7,2,2400),
       (50,'2/3/98',6,7,600),
       (60,'3/2/98',6,7,720),
       (70,'5/6/98',9,7,150);