SELECT Town, EMPLOYED*100/(EMPLOYED + UNEMPLOYED + INACTIVE) AS PercentEMPLOYED
FROM workers
ORDER BY PercentEMPLOYED DESC;