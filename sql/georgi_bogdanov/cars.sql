create table cars (
cars_ID int not null,
marka varchar(255) not null,
model varchar(255) not null,
first_reg_year int not null,
fuel_engine varchar(255) not null,
run_km int not null,
transmission varchar(255) not null,
power_kw int not null,
color varchar(255) not null,
country varchar(255) not null,
price int not null,
primary key (cars_ID)
)
collate='utf8_general_ci'
engine=MyISAM;
INSERT INTO cars (cars_id, marka, model, first_reg_year, fuel_engine, run_km, transmission, power_kw, color, country, price)
VALUES (1,'VOLVO','v50',2010,'diesel',105000,'manual',110,'black','Italy',10000),
       (2,'AUDI','a5',2009,'diesel',150000,'automat',176,'black','Germany',29999),
       (3,'BMW','650 xDrive',2011,'gasoline',71000,'automat',300,'brown_metallic','Germany',110000),
       (4,'BMW','5 Grand Turismo',2010,'diesel',162000,'automat',180,'dark_blue_metallic','Austria',47000),
       (5,'FIAT','500l Trekking',2014,'diesel',12064,'automat',63,'green','Italy',31900),
       (6,'FIAT','Freemount',2012,'diesel',36386,'manual',125,'gray','Italy',39500),
       (7,'FORD','Kuga',2011,'diesel',186000,'automat',120,'gray_metallic','Belgium',25000),
       (8,'FORD',' mondeo',2014,'Hybrid',17000,'automat',138,'white_metallic','Holand',34900),
       (9,'MAZDA','CX7',2009,'gas/gasoline',148000,'manual',147,'gray_metallic','Austria',18900),
       (10,'MAZDA','6',2010,'gasoline',66714,'manual',110,'light_gray','Germany',25900),
       (11,'Mercedes-Benz','C_320',2008,'diesel',163200,'automat',165,'dark_gray','Austria',28400),
       (12,'Mercedes-Benz','C63_AMG',2010,'gasoline',64800,'automat',336,'white_metallic','Germany',82000),
       (13,'Mercedes-Benz','CL_63',2008,'gasoline',89000,'automat',386,'light_gray','Germany',79000),
       (14,'Opel','Insignia',2010,'diesel',180667,'manual',96,'gray_metallic','Austria',17900),
       (15,'Opel','Zafira',2010,'diesel',85000,'manual',110,'light_gray_metallic','Italy',13700),
       (16,'Opel','Corsa',2011,'gasoline',19700,'manual',63,'red','Italy',11999),
       (17,'Peugeot','4007',2008,'diesel',135000,'manual',115,'black_metallic','France',16500),
       (18,'Peugeot','3008',2010,'diesel',156000,'automat',81,'white_perl_metallic','Italy',15200),
       (19,'Peugeot','508',2011,'gasoline',47975,'manual',115,'white_metallic','Austria',24000),
       (20,'Skoda','Yeti',2012,'diesel',82700,'manual',103,'light_gray_metallic','Belgium',27900);