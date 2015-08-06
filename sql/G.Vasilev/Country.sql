DROP TABLE IF EXISTS COUNTRY;
CREATE TABLE COUNTRY
(ID int NOT NULL AUTO_INCREMENT,
CountryName varchar(50),
City varchar(50),
People int,
Area int,
Continent varchar(50),
PRIMARY KEY (ID));

INSERT INTO COUNTRY (CountryName,City,People, Area, Continent)
VALUES ('Bulgaria','Sofia','8000000','110994','Europe'),
 ('Greece','Atina','11000000','131990', 'Europe'),
('Brazil', 'Brazil', '192376496', '8514876', 'South America'),
('Peru','Lima','31151643' ,'11285216', 'South America'),
('Canada', 'Otava','35158300', '9984671', 'North America'),
('Japan', 'Tokyo','126880000', '377944', 'Asia'),
('China', 'Beijing','1357380000','9596961', 'Asia');

SELECT Continent,SUM(People) from COUNTRY GROUP BY Continent ORDER BY 2 DESC;