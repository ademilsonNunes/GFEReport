SELECT GW4_EMISDF,
	   GW4_CDESP,
	   GW4_SERDF,
	   GW4_NRDF,
	   GW4_DTEMIS,
	   GW4_NRDC,
	   GW4_TPDC,
	   GW4_SERDC,
	   GW4_EMISDC,
	   GW4_SDOCDC,
	   CASE 
		 WHEN (GW3S.GW3_VLDF) IS NOT NULL THEN (GW3S.GW3_VLDF)
		 WHEN (GW3J.GW3_VLDF) IS NOT NULL THEN (GW3J.GW3_VLDF)
		 WHEN (GW33.GW3_VLDF) IS NOT NULL THEN (GW33.GW3_VLDF)
		 ELSE NULL
       END AS 'VLDF'	   
FROM GW4010 GW4 
LEFT JOIN GW3010 GW3S ON GW3S.GW3_NRDF = GW4.GW4_NRDF AND GW3S.GW3_SERDF = GW4.GW4_SERDF AND GW4.GW4_EMISDF = GW3S.GW3_EMISDF AND GW3S.D_E_L_E_T_ = ''
LEFT JOIN GW3020 GW3J ON GW3J.GW3_NRDF = GW4.GW4_NRDF AND GW3J.GW3_SERDF = GW4.GW4_SERDF AND GW4.GW4_EMISDF = GW3J.GW3_EMISDF AND GW3J.D_E_L_E_T_ = ''
LEFT JOIN GW3040 GW33 ON GW33.GW3_NRDF = GW4.GW4_NRDF AND GW33.GW3_SERDF = GW4.GW4_SERDF AND GW4.GW4_EMISDF = GW33.GW3_EMISDF AND GW33.D_E_L_E_T_ = ''
WHERE GW4_NRDC IN        ( SELECT F2_DOC 
                           FROM SF2040 
                           WHERE F2_EMISSAO BETWEEN '20210201' AND '20210228'
						   AND F2_SERIE = GW4.GW4_SERDC
                           AND D_E_L_E_T_ = ''                           
                           AND F2_ROMANEI <> ''

						   UNION ALL

						   SELECT F2_DOC 
                           FROM SF2020 
                           WHERE F2_EMISSAO BETWEEN '20210201' AND '20210228'
                           AND D_E_L_E_T_ = ''      
						   AND F2_SERIE = GW4.GW4_SERDC
                           AND F2_ROMANEI <> ''

						   UNION ALL 

						   SELECT F2_DOC 
                           FROM SF2010 
                           WHERE F2_EMISSAO BETWEEN '20210201' AND '20210228'
                           AND D_E_L_E_T_ = ''      
						   AND F2_SERIE = GW4.GW4_SERDC
                           AND F2_ROMANEI <> ''
						   )
AND GW4.D_E_L_E_T_  = ''








