


SELECT DISTINCT *
FROM(
SELECT 'EMP' = 'SOBEL',       
       GW6_NRFAT,
       GW6_SERFAT,
       GW6_EMIFAT,
       GW6_VLFATU
FROM GW6010 
WHERE D_E_L_E_T_ = ''

UNION ALL

SELECT 'EMP' = 'JMT',
       GW6_NRFAT,
       GW6_SERFAT,
       GW6_EMIFAT,
       GW6_VLFATU
FROM GW6020 
WHERE D_E_L_E_T_ = ''

UNION ALL

SELECT 'EMP' = '3F',
       GW6_NRFAT,
       GW6_SERFAT,
       GW6_EMIFAT,
       GW6_VLFATU
FROM GW6040 
WHERE D_E_L_E_T_ = ''
) AS RES


/*

SELECT  *
FROM GW4010
WHERE D_E_L_E_T_ = ''

EXEC sp_help 'GW6010'

*/
