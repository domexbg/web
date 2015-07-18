SELECT Salesperson.NAME
FROM Salesperson
WHERE Salesperson.ID NOT IN 
(SELECT salesperson_id
FROM Orders
WHERE cust_id=4);