SELECT NAME
FROM Salesperson
INNER JOIN Orders
ON Salesperson.ID=Orders.salesperson_id
GROUP BY NAME HAVING COUNT(Orders.salesperson_id)>1;