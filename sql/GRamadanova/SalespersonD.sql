DROP TABLE IF EXISTS highAchiever;

CREATE TABLE  highAchiever
(Name VARCHAR (50), 
Age INTEGER);
INSERT INTO highAchiever(Name, Age)
SELECT Name, Age
FROM Salesperson
WHERE Salesperson.salary>=100000;

