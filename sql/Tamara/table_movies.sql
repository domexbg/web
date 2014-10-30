CREATE TABLE movies_tamara (
	NumID INT(11) NOT NULL AUTO_INCREMENT,
	MovieName VARCHAR(255) NOT NULL,
	Stars VARCHAR(255) NOT NULL,
	Director VARCHAR(255) NOT NULL,
	Genre VARCHAR(255) NOT NULL,
	Release_year INT NOT NULL,
	Run_time INT NOT NULL,	      
	PRIMARY KEY (NumID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

INSERT INTO movies_tamara (MovieName, Stars, Director,Genre, Release_year, Run_time) 
 VALUES ('Maleficent','Angelina Jolie','Robert Stromberg','Family', 2014, 97),
        ('The Accidental Husband','Uma Thurman','Griffin Dunne','Comedy', 2008, 90),
        ('The Curious Case of Benjamin Button','Brad Pitt, Cate Blanchett','David Fincher','Drama', 2008, 116),
        ('The Game','Michael Douglas','David Fincher','Thriller', 1997, 129),
        ('The Godfather','Marlon Brando, Al Pacino','Francis Ford Coppola','Crime',1972, 175),
        ('The Terminator','Arnold Schwarzenegger','James Cameron','Action', 1984, 107),
        ('From Hell','Johnny Depp','Albert Hughes','Horror', 2001, 122),
        ('The Lord of the Rings:The Fellowship of the Ring','Elijah Wood, Ian McKellen, Orlando Bloom','Peter Jackson','Fantasy',2001, 178),
        ('The Matrix',' Keanu Reeves, Laurence Fishburne','Andy Wachowski','Action',1999, 136),
        ('Batman Begins','Christian Bale, Michael Caine','Christopher Nolan','Action', 2005, 140),
        ('Star Wars','Mark Hamill, Harrison Ford','George Lucas','Action, Adventure, Fantasy', 1977, 121),
        ('Forrest Gump','Tom Hanks','Robert Zemeckis','Drama, Romance', 1994, 142),
        ('Oceans Twelve','George Clooney, Brad Pitt, Julia Roberts','Steven Soderbergh','Crime, Thriller', 2004,125),
        ('Erin Brockovich','Julia Roberts','Steven Soderbergh','Biography, Drama', 2000, 131),
        ('Pretty Woman','Richard Gere, Julia Roberts','Garry Marshall','Comedy, Romance', 1990, 119),
        ('Original Sin','Antonio Banderas, Angelina Jolie','Michael Cristofer','Drama, Mystery, Romance', 2001, 116);
