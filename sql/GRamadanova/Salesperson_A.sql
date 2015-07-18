SELECT Salesperson.NAME
FROM Orders
INNER JOIN Salesperson
ON Orders.salesperson_id=Salesperson.ID
WHERE Orders.cust_id=4;