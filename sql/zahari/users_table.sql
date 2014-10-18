
CREATE TABLE users (
  id int AUTO_INCREMENT,
  username varchar(20),
  password varchar(20),
  real_name varchar(50),
  email varchar(20),
  gender varchar(10) DEFAULT 'male',
  telephone bigint(20) NOT NULL,
  age int,
  PRIMARY KEY (`id`)
) ;

INSERT INTO users (id, username, password, 
  real_name, email, gender, telephone, age) VALUES
(1, 'zahari', '202cb962ac59075b964b', 'Zahari Zahariev', 'hello@msn.com', 'male', 6547238484, 30),
(2, 'robert', 'caf1a3dfb505ffed0d02', 'Robert Jenkins', 'rob@msn.com', 'male', 888376464, 41);
