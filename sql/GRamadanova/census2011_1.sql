/*1. Kolko sa naselenite mesta v olast Varna?
[17:58:00 | (18:02:01 — редактирано)] Zahari Z.: ot tablica census2011*/



SELECT PLACE FROM census2011
WHERE DISTRICT= 'OBL.VARNA';

SELECT COUNT(PLACE) FROM census2011
WHERE DISTRICT='OBL.VARNA';