SELECT CONCAT(FirstName,CONCAT (PersonID)) AS FN from persons;
UPDATE persons SET FirstName=CONCAT(FirstName,CONCAT (PersonID)) WHERE FirstName LIKE '%';
SELECT * FROM `workers` WHERE TOWN LIKE '% %'
SELECT TOWN,EMPLOYED+UNEMPLOYED+INACTIVE AS Total FROM `workers` ORDER BY Total DESC LIMIT 5;

//SELECT 5 towns from the middle of the table
SELECT TOWN,EMPLOYED+UNEMPLOYED+INACTIVE AS Total FROM `workers`  WHERE ABS((SELECT AVG(EMPLOYED+UNEMPLOYED+INACTIVE) FROM `workers`) - (EMPLOYED+UNEMPLOYED+INACTIVE)) < 2000 LIMIT 5

//same as SELECT above but another style
SELECT TOWN,EMPLOYED+UNEMPLOYED+INACTIVE AS Total, (SELECT AVG(EMPLOYED+UNEMPLOYED+INACTIVE) FROM workers) as Average FROM `workers`  
HAVING ABS(
	Average - Total
        ) < 2000 LIMIT 5
  
SELECT Country,COUNT(Country) AS Cust_Count FROM [Customers] GROUP BY Country ORDER BY Cust_Count DESC;

//SELECT average price for every supplier and round it up to 2nd sign after decimal point
SELECT SupplierID,ROUND(AVG(Price),2) as Avarage_Price FROM [Products] GROUP BY SupplierID;
