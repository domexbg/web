Given the tables above, find the following:
a. The names of all salespeople that have an order with Samsonic.

SELECT * FROM salesperson,customer,orders WHERE orders.cust_id=customer.id AND orders.salesperson_id=salesperson.id AND customer.name='Samsonic'


b. The names of all salespeople that do not have any order with Samsonic.

SELECT * FROM salesperson,customer,orders WHERE orders.cust_id=customer.id AND orders.salesperson_id=salesperson.id AND customer.name!='Samsonic'


c. The names of salespeople that have 2 or more orders.