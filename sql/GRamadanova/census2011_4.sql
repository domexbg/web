SELECT PLACE,(G65_69+G70_74+G75_79+G80_84+G85_)*100/(TOTAL),2 AS PERCENT_65
FROM census2011
WHERE MID(PLACE,4)=MID(DISTRICT,5)
ORDER BY PERCENT_65 DESC LIMIT 5;

/*4. Koi sa oblastnite gradove s nai-visok procent pensioneri (nad 65). Iskame purvite 5 rezultata podredeni v namalqvasht red.*/
