DROP TABLE IF EXISTS Orders;

CREATE TABLE Orders
(Number INT NOT NULL PRIMARY KEY, 
Order_date DATE,
cust_id INTEGER,
salesperson_id INTEGER,
Amount INTEGER);
INSERT INTO Orders (Number, Order_date, cust_id, salesperson_id, Amount)
VALUES (10, '1996-02-08', 4, 2, 540), 
(20, '1999-01-30', 4, 8, 1800), 
(30, '1995-07-14', 9, 1, 460), 
(40, '1998-01-29', 7, 2, 2400), 
(50, '1998-02-03', 6, 7, 600), 
(60, '1998-03-02', 6, 7, 720), 
(70, '1998-05-06', 9, 7, 150); 