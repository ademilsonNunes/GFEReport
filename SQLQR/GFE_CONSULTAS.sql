/* Emitentes de transporte*/
SELECT *
FROM GU3010
WHERE GU3_IDFED = '28990225000151'

SELECT *
FROM GU3010
WHERE GU3_CDTERP = '058014'

/* Cadastro de transportadoras */
SELECT *
FROM SA4010
WHERE A4_COD = '058014'

/*retorna documentos de carga presentes no romaneio*/
SELECT * 
FROM GW1010 
WHERE GW1_NRDC = '023688'

/* ITENS DO DOCUMENTO DE CARGA (NF SAÍDA) */
SELECT *
FROM GW8010
WHERE GW8_NRDC = '023688'


--WHERE GW1_NRROM = '20497801'


/* Valida trecho no Romaneio */
SELECT *
FROM GWU010
WHERE GWU_NRDC IN(SELECT GW1_NRDC
FROM GW1010 
WHERE GW1_NRROM = '20494801')
AND GWU_EMISDC = '000000376' ---SOBEL 000000376 | JMT 000000146 | 3F
AND D_E_L_E_T_ = ''

/* Cálculos de frete */
SELECT *
FROM GWF010
WHERE GWF_NRROM = '20493101' 
AND D_E_L_E_T_ = ''


SELECT *
FROM GWF010
WHERE GWF_NRROM = '20525901' 
AND D_E_L_E_T_ = ''

/*Unitizadores de Carga */
SELECT *
FROM GWB010 
WHERE GWB_NRDC IN (SELECT GW1_NRDC FROM GW1010 WHERE GW1_NRROM = '20525901' AND D_E_L_E_T_ = '')


/* trechos do romaneio de cargar GWU */
SELECT *
FROM GWU010
WHERE GWU_NRDC IN  ( '149644', '149647','149666', '149645')
AND D_E_L_E_T_ = ''





/*GW4 documentos de carga vinculados a fatura*/
	SELECT DISTINCT GW4_NRDF, GW4_SERDF
	FROM GW4010
	WHERE GW4_NRDC IN (SELECT GW1_NRDC
					  FROM GW1010 
					  WHERE GW1_NRROM = '20472801')
	AND D_E_L_E_T_ = ''

/*
   130052   
   130053   
*/

/* Consultar notas para o Romaneio em todas as empresas*/

DECLARE @ROMANEIO AS VARCHAR(6)

SET @ROMANEIO = '205075 '

SELECT C5_NOTA, C5_ZZTIPO, C5_NUM               
FROM SC5010 
WHERE C5_ROMANEI = @ROMANEIO

SELECT C5_NOTA, C5_ZZTIPO, C5_NUM   
FROM SC5020 
WHERE C5_ROMANEI = @ROMANEIO

SELECT C5_NOTA, C5_ZZTIPO, C5_NUM   
FROM SC5040 
WHERE C5_ROMANEI = @ROMANEIO


----CUIDADO NÃO EXECUTE ESTE UPDATE SEM AVALIAR O CONTEXTO 
/*
BEGIN TRANSACTION
UPDATE GW1010
SET GW1_SIT = 4
WHERE GW1_DTEMIS BETWEEN '20210301' AND '20210329'
AND GW1_SIT <> 4
AND D_E_L_E_T_ = '' 

ROLLBACK 
COMMIT
*/



/* PRINCIPAIS ERROS NA INTEGRAÇÃO PROTHEUS FATURAMENTO E GFE */
--https://tdn.totvs.com/pages/releaseview.action?pageId=337359685

/* TABELAS GFE */
--https://tdn.totvs.com/pages/releaseview.action?pageId=349185822

/* DICIONÁRIO DE DADOS TABELAS PROTHEUS INCLUSIVE GFE *
--http://sempreju.com.br/tabelas_protheus/tabelas_protheus.php/


/* INTEGRAÇÃO PROTHEUS */
--https://tdn.totvs.com/pages/releaseview.action?pageId=235310789
*/

SELECT *
FROM GW1010
WHERE GW1_NRDC IN ('149647', '149644') 
AND D_E_L_E_T_ = ''


SELECT *
FROM SF2020 
WHERE F2_DOC = '149644'



--GW6
--GW8
--GWN

SELECT *
FROM GWN010