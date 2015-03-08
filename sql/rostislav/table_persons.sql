DROP TABLE IF EXISTS persons;
CREATE TABLE `persons` (
	`ID` INT(11) NULL AUTO_INCREMENT,
	`LastName` VARCHAR(50) NULL DEFAULT NULL,
	`FirstName` VARCHAR(50) NULL DEFAULT NULL,
	`Address` VARCHAR(50) NULL DEFAULT NULL,
	`City` VARCHAR(50) NULL DEFAULT NULL,
	PRIMARY KEY (ID)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

INSERT INTO persons (LastName, FirstName, Address, City)
VALUES ("Radev", "Rostislav", "Lyulin", "Sofia"), ("Ivanov", "Ivan", "Mladost", "Sofia"), ("Petrov", "Ivan", "Nadezhda", "Varna"),
 ("Stoyanov", "Georgi", "Druzhba", "Sofia"), ("Georgiev", "Ivan", "Mladost", "Sofia"), ("Petrov", "Stoyan", "Nadezhda", "Ruse"),
 ("Ivanov", "Rostislav", "Lyulin", "Plovdiv"), ("Ivanov", "Zahari", "Mladost", "Sofia"), ("Todorov", "Ivan", "Nadezhda", "Varna"),
 ("Stoyanov", "Georgi", "Druzhba", "Pernik"), ("Georgiev", "Ivan", "Vrazhdebna", "Sofia"), ("Petrov", "Stoyan", "Nadezhda", "Stara Zagora");
SELECT * FROM persons;
