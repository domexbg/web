ALTER TABLE persons AUTO_INCREMENT = 1;
INSERT INTO persons (LastName, FirstName, Address, City)
VALUES ("Radev", "Rostislav", "Lyulin", "Sofia"), ("Ivanov", "Ivan", "Mladost", "Sofia"), ("Petrov", "Ivan", "Nadezhda", "Varna");
SELECT * FROM persons;

UPDATE persons
SET LastName="Radeff", FirstName="Rostislaff", Address="Lyulin 7";

INSERT INTO persons (ID, LastName, FirstName, Address, City)
VALUES (2, "Radev", "Rostislav", "Lyulin", "Sofia");