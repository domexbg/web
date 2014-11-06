select Salesperson.Name from Salesperson, Customer, Orders
where Orders.cust_id=Customer.ID 
AND Orders.salesperson_id=Salesperson.ID 
and customer.name='Samsonic';

select Salesperson.Name from salesperson where name not in 
(select Salesperson.Name from Salesperson, Customer, Orders
where Orders.cust_id=Customer.ID 
AND Orders.salesperson_id=Salesperson.ID 
and customer.name='Samsonic');

select Name from Salesperson inner join Orders on
orders.salesperson_id=Salesperson.ID 
GROUP BY Name HAVING COUNT(Salesperson.Name) >= 2;

create table highAchiver select Name, Age from Salesperson 
where salary>100000;
