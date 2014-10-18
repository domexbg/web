CREATE TABLE cars (
  car_id int AUTO_INCREMENT,
  make varchar(20),
  model varchar(20),
  engine_type varchar(20),
  color varchar(20),
  year int,
  price int,
  milage int,
  PRIMARY KEY(car_id)
);

INSERT INTO cars (make, model, engine_type, color, 
  year, price, milage) 
VALUES 
("Mercedes", "CLK", "disel", "white", 2010, 45000, 50000),
("Mercedes", "300", "petrol", "black", 1997, 5000, 350000),
("Audi", "A8", "petrol", "pink", 2007, 20000, 100000),
("Audi", "A8", "disel", "red", 2012, 70000, 10000);
