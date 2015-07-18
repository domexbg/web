SELECT Town,(EMPLOYED + UNEMPLOYED + INACTIVE) AS Population, EMPLOYED*100/(EMPLOYED + UNEMPLOYED + INACTIVE) AS PercentEMPLOYED
FROM workers
WHERE (EMPLOYED + UNEMPLOYED + INACTIVE) BETWEEN 20000 AND 50000
ORDER BY PercentEMPLOYED DESC;
/*3. Naselenite mesta s nai-visok procent zaeti, koito sa s naselenie ot 20 000 do 50 000 dushi ? Da se podredqt po nizhodqsht red.*/