SELECT NAME
FROM Salesperson, Orders
WHERE Salesperson.ID=Orders.salesperson_id
GROUP BY NAME HAVING COUNT(Orders.salesperson_id)>1;