CREATE TABLE Students
(
ID int NOT NULL PRIMARY KEY,
Name varchar(255),
Class int,
Score float
); 
INSERT into Students (ID, Name, Class, Score)
VALUES ('1','Petar Ivanov','10','5.30'),
('2','Ivan Georgiev','8','4.10'),
('3','Stoyan Georgiev','8','5.95');
SELECT * FROM Students
WHERE Class='10';

