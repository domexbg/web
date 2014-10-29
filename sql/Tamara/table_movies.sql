CREATE TABLE movies_tamara (
	NumID INT(11) NOT NULL AUTO_INCREMENT,
	MovieName VARCHAR(255) NOT NULL,
	Stars VARCHAR(255) NOT NULL,
	Director VARCHAR(255) NOT NULL,
	Genre VARCHAR(255) NOT NULL,
	PRIMARY KEY (NumID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM

INSERT INTO movies_tamara (MovieName, Stars, Director,Genre) 
 VALUES ('Maleficent','Angelina Jolie','Robert Stromberg','Family'),
        ('The Accidental Husband','Uma Thurman','Griffin Dunne','Comedy'),
        ('The Curious Case of Benjamin Button','Brad Pitt, Cate Blanchett','David Fincher','Drama'),
        ('The Game','Michael Douglas','David Fincher','Thriller'),
        ('The Godfather','Marlon Brando, Al Pacino','Francis Ford Coppola','Crime'),
        ('The Terminator','Arnold Schwarzenegger','James Cameron','Action'),
        ('From Hell','Johnny Depp','Albert Hughes','Horror'),
        ('The Lord of the Rings: The Fellowship of the Ring','Elijah Wood, Ian McKellen, Orlando Bloom','Peter Jackson','Fantasy'),
        ('The Matrix',' Keanu Reeves, Laurence Fishburne','Andy Wachowski','Action'),
        ('Batman Begins','Christian Bale, Michael Caine','Christopher Nolan','Action'),
        ('Star Wars','Mark Hamill, Harrison Ford','George Lucas','Action, Adventure, Fantasy'),
        ('Forrest Gump','Tom Hanks','Robert Zemeckis','Drama, Romance'),
        ('Ocean's Twelve','George Clooney, Brad Pitt, Julia Roberts','Steven Soderbergh','Crime, Thriller'),
        ('Erin Brockovich','Julia Roberts','Steven Soderbergh','Biography, Drama'),
        ('Pretty Woman','Richard Gere, Julia Roberts','Garry Marshall','Comedy, Romance'),
        ('Original Sin','Antonio Banderas, Angelina Jolie','Michael Cristofer','Drama, Mystery, Romance');
