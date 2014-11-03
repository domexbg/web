select MovieName, Release_year from movies_tamara 
where Release_year<2014-10;

select MovieName, Release_year, Genre from movies_tamara 
where Genre='Action' && Release_year>2004;

SELECT MovieName, Stars FROM movies_tamara
WHERE Stars LIKE '%Brad Pitt%';
