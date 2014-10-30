CREATE TABLE CollectionCD IF NOT EXISTs
(
CD_ID INT (10) NOT NULL AUTO_INCREMENT,
ARTIST VARCHAR(255) NOT NULL,
ALBUM VARCHAR(255) NOT NULL,
ALBUM_LENGTH int(20) NOT NULL,
GENRE VARCHAR(255) NOT NULL,
YEARs int(20) NOT NULL,

RATING FLOAT(1,1),
CD_SIZE INT (10) NOT NULL,
TIPE VARCHAR(20) NOT NULL,
PRIMARY KEY (CD_ID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

INSERT INTO CollectionCD (ARTIST,ALBUM,ALBUM_LENGTH,GENRE,YEARs,RATING,CD_SIZE,TIPE)
VALUES 
('METALLICA','...And Justice for All',45*60+40,'TRASH METAL',1988,10.0,2000,'FLAC'),
('BEATLES','YELLOW SUBMARINE',55*60+00,'ROCK AND ROLL',1969,4.5,700,'MP3'),
('DIDO','LIFE FOR RENT',20*60+40,'POP',2003,'',700,'MP3'),
('DRAGANA','SAMA',36*60+40,'JUGOFOLK',2000,'',700,'MP3'),
('SCORPIONS','BLACKOUT',20*60+00,'ROCK',1982,8.0,1300,'FLAC'),
('METALLICA','Death Magnetic',60*60+50,'TRASH METAL',2008,7,800,'OGG'),
('IGGY AZALEA','The New Classic',44*60+00,'POP',2014,4.3,700,'MP3');

CREATE TABLE BAND IF NOT EXISTs
(
ARTIST_ID INT (100) NOT NULL AUTO_INCREMENT,
ARTIST VARCHAR(255) NOT NULL,
MEMBERS VARCHAR(255),
BORN DATE NOT NULL,
PRIMARY KEY (ARTIST_ID)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;

INSERT INTO BAND (ARTIST,MEMBERS,BORN)
VALUES
('METALLICA','James Hetfield',1970),
('METALLICA','kirk hammet',1970),
('BEATLES','John Lennon',1955),

('BEATLES','paul mcartny',1955),
('DIDO','',1980),
('DRAGANA','DRAGANA MIRCOVIC',1960),
('SCORPIONS','Rudolf Schenker',1951),
('IGGY AZALEA','',1989);


