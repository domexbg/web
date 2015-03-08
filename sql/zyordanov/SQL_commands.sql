SELECT CONCAT(FirstName,CONCAT (PersonID)) AS FN from persons;

UPDATE persons SET FirstName=CONCAT(FirstName,CONCAT (PersonID)) WHERE FirstName LIKE '%';
