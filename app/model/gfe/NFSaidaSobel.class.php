<?php
/**
 * NFSaidaSobel
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class NFSaidaSobel extends TRecord
{
    const TABLENAME = 'SF2010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}
    public $nome;

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('F2_DOC');
        parent::addAttribute('F2_SERIE');
        parent::addAttribute('F2_CLIENTE');
        parent::addAttribute('F2_LOJA');
        parent::addAttribute('F2_COND');
        parent::addAttribute('F2_DUPL');
        parent::addAttribute('F2_EMISS');
        parent::addAttribute('F2_EST');
        parent::addAttribute('F2_FRETE');
        parent::addAttribute('F2_SEGUR');
        parent::addAttribute('F2_ICMFR');
        parent::addAttribute('F2_TIPOC');
        parent::addAttribute('F2_VALBR');
        parent::addAttribute('F2_VALIC');
        parent::addAttribute('F2_BASEI');
        parent::addAttribute('F2_VALIP');
        parent::addAttribute('F2_BASEI');
        parent::addAttribute('F2_VALME');
        parent::addAttribute('F2_NFORI');
        parent::addAttribute('F2_DESCO');
        parent::addAttribute('F2_SERIO');
        parent::addAttribute('F2_TIPO');
        parent::addAttribute('F2_ESPEC');
        parent::addAttribute('F2_ESPEC');
        parent::addAttribute('F2_ESPEC');
        parent::addAttribute('F2_ESPEC');
        parent::addAttribute('F2_VOLUM');
        parent::addAttribute('F2_VOLUM');
        parent::addAttribute('F2_VOLUM');
        parent::addAttribute('F2_VOLUM');
        parent::addAttribute('F2_ICMSR');
        parent::addAttribute('F2_PLIQU');
        parent::addAttribute('F2_PBRUT');
        parent::addAttribute('F2_TRANS');
        parent::addAttribute('F2_REDES');
        parent::addAttribute('F2_VEND1');
        parent::addAttribute('F2_VEND2');
        parent::addAttribute('F2_VEND3');
        parent::addAttribute('F2_VEND4');
        parent::addAttribute('F2_VEND5');
        parent::addAttribute('F2_OK');
        parent::addAttribute('F2_FIMP');
        parent::addAttribute('F2_DTLANC');
        parent::addAttribute('F2_DTREAJ');
        parent::addAttribute('F2_REAJUST');
        parent::addAttribute('F2_DTBASE0');
        parent::addAttribute('F2_FATORB0');
        parent::addAttribute('F2_DTBASE1');
        parent::addAttribute('F2_FATORB1');
        parent::addAttribute('F2_VARIAC');
        parent::addAttribute('F2_FILIAL');
        parent::addAttribute('F2_BASEISS');
        parent::addAttribute('F2_VALISS');
        parent::addAttribute('F2_VALFAT');
        parent::addAttribute('F2_CONTSOC');
        parent::addAttribute('F2_BRICMS');
        parent::addAttribute('F2_FRETAUT');
        parent::addAttribute('F2_ICMAUTO');
        parent::addAttribute('F2_DESPESA');
        parent::addAttribute('F2_NEXTDOC');
        parent::addAttribute('F2_NEXTSER');
        parent::addAttribute('F2_ESPECIE');
        parent::addAttribute('F2_PDV');
        parent::addAttribute('F2_MAPA');
        parent::addAttribute('F2_ECF');
        parent::addAttribute('F2_PREFIXO');
        parent::addAttribute('F2_BASIMP1');
        parent::addAttribute('F2_BASIMP2');
        parent::addAttribute('F2_BASIMP3');
        parent::addAttribute('F2_BASIMP4');
        parent::addAttribute('F2_BASIMP5');
        parent::addAttribute('F2_BASIMP6');
        parent::addAttribute('F2_VALIMP1');
        parent::addAttribute('F2_VALIMP2');
        parent::addAttribute('F2_VALIMP3');
        parent::addAttribute('F2_VALIMP4');
        parent::addAttribute('F2_VALIMP5');
        parent::addAttribute('F2_VALIMP6');
        parent::addAttribute('F2_ORDPAGO');
        parent::addAttribute('F2_NFCUPOM');
        parent::addAttribute('F2_VALINSS');
        parent::addAttribute('F2_HORA');
        parent::addAttribute('F2_MOEDA');
        parent::addAttribute('F2_REGIAO');
        parent::addAttribute('F2_VALCSLL');
        parent::addAttribute('F2_VALCOFI');
        parent::addAttribute('F2_VALPIS');
        parent::addAttribute('F2_LOTE');
        parent::addAttribute('F2_TXMOEDA');
        parent::addAttribute('F2_CLEOK');
        parent::addAttribute('F2_CHVCLE');
        parent::addAttribute('F2_IDCLE');
        parent::addAttribute('F2_VALIRRF');
        parent::addAttribute('F2_RECFAUT');
        parent::addAttribute('F2_CARGA');
        parent::addAttribute('F2_SEQCAR');
        parent::addAttribute('F2_BASEINS');
        parent::addAttribute('F2_PEDPEND');
        parent::addAttribute('F2_DESCCAB');
        parent::addAttribute('F2_DTENTR');
        parent::addAttribute('F2_FORMUL');
        parent::addAttribute('F2_TIPODOC');
        parent::addAttribute('F2_NFEACRS');
        parent::addAttribute('F2_TIPOREM');
        parent::addAttribute('F2_SEQENT');
        parent::addAttribute('F2_ICMSDIF');
        parent::addAttribute('F2_VALACRS');
        parent::addAttribute('F2_RECISS');
        parent::addAttribute('F2_VALCF3');
        parent::addAttribute('F2_ORDSEP');
        parent::addAttribute('F2_HORNFE');
        parent::addAttribute('F2_CHVNFE');
        parent::addAttribute('F2_FLAGDEV');
        parent::addAttribute('F2_TPFRETE');
        parent::addAttribute('F2_NFELETR');
        parent::addAttribute('F2_BASECF3');
        parent::addAttribute('F2_VEICUL2');
        parent::addAttribute('F2_HAWB');
        parent::addAttribute('F2_NODIA');
        parent::addAttribute('F2_BASEPS3');
        parent::addAttribute('F2_EMINFE');
        parent::addAttribute('F2_ESTCRED');
        parent::addAttribute('F2_BASEIRR');
        parent::addAttribute('F2_VALPS3');
        parent::addAttribute('F2_CODNFE');
        parent::addAttribute('F2_TIPORET');
        parent::addAttribute('F2_BASPIS');
        parent::addAttribute('F2_CREDNFE');
        parent::addAttribute('F2_VEICUL1');
        parent::addAttribute('F2_DIACTB');
        parent::addAttribute('F2_VALTST');
        parent::addAttribute('F2_CGCCLI');
        parent::addAttribute('F2_RECOPI');
        parent::addAttribute('F2_FILDEST');
        parent::addAttribute('F2_NFICMST');
        parent::addAttribute('F2_VLSENAR');
        parent::addAttribute('F2_BASCSLL');
        parent::addAttribute('F2_NFSUBST');
        parent::addAttribute('F2_CLIENT');
        parent::addAttribute('F2_BASETST');
        parent::addAttribute('F2_SERSUBS');
        parent::addAttribute('F2_NTFECP');
        parent::addAttribute('F2_REFTAXA');
        parent::addAttribute('F2_VLR_FRT');
        parent::addAttribute('F2_BASEFUN');
        parent::addAttribute('F2_BASCOFI');
        parent::addAttribute('F2_REFMOED');
        parent::addAttribute('F2_VEICUL3');
        parent::addAttribute('F2_DTDIGIT');
        parent::addAttribute('F2_VALFDS');
        parent::addAttribute('F2_PREFORI');
        parent::addAttribute('F2_LOJENT');
        parent::addAttribute('F2_VREINT');
        parent::addAttribute('F2_BSREIN');
        parent::addAttribute('F2_VALFAB');
        parent::addAttribute('F2_VALFAC');
        parent::addAttribute('F2_VALFET');
        parent::addAttribute('F2_VALINA');
        parent::addAttribute('F2_BASEINA');
        parent::addAttribute('F2_DESCZFR');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('F2_EVENFLG');
        parent::addAttribute('F2_IDCCE');
        parent::addAttribute('F2_FLAGRGS');
        parent::addAttribute('F2_IDRGS');
        parent::addAttribute('F2_CODRGS');
        parent::addAttribute('F2_DAUTNFE');
        parent::addAttribute('F2_HAUTNFE');
        parent::addAttribute('F2_USERLGI');
        parent::addAttribute('F2_USERLGA');
        parent::addAttribute('F2_ZZSRECB');
        parent::addAttribute('F2_ZZDTREC');
        parent::addAttribute('F2_ZZDTSAI');
        parent::addAttribute('F2_FORMDES');
        parent::addAttribute('F2_NUMORC');
        parent::addAttribute('F2_IDSA1');
        parent::addAttribute('F2_IDSA2');
        parent::addAttribute('F2_IDSED');
        parent::addAttribute('F2_LOJADES');
        parent::addAttribute('F2_FORDES');
        parent::addAttribute('F2_DTTXREF');
        parent::addAttribute('F2_TXREF');
        parent::addAttribute('F2_TOTIMP');
        parent::addAttribute('F2_TIPIMP');
        parent::addAttribute('F2_MENNOTA');
        parent::addAttribute('F2_TPNFEXP');
        parent::addAttribute('F2_IDRECOP');
        parent::addAttribute('F2_TOTFED');
        parent::addAttribute('F2_TOTEST');
        parent::addAttribute('F2_TOTMUN');
        parent::addAttribute('F2_VLCPM');
        parent::addAttribute('F2_BASECPM');
        parent::addAttribute('F2_VALFMP');
        parent::addAttribute('F2_BASEFMP');
        parent::addAttribute('F2_VALFMD');
        parent::addAttribute('F2_GNRFECP');
        parent::addAttribute('F2_GNRDIF');
        parent::addAttribute('F2_DTESERV');
        parent::addAttribute('F2_VALFUND');
        parent::addAttribute('F2_VALIMA');
        parent::addAttribute('F2_VALFASE');
        parent::addAttribute('F2_ZZTIPO');
        parent::addAttribute('F2_STATUS');
        parent::addAttribute('F2_SERSAT');
        parent::addAttribute('F2_LTRAN');
        parent::addAttribute('F2_TPCOMPL');
        parent::addAttribute('F2_CNO');
        parent::addAttribute('F2_NUMMDF');
        parent::addAttribute('F2_SDOCSUB');
        parent::addAttribute('F2_SDOCMAN');
        parent::addAttribute('F2_SDOCORI');
        parent::addAttribute('F2_SDOCMDF');
        parent::addAttribute('F2_SDOCNXT');
        parent::addAttribute('F2_SDOC');
        parent::addAttribute('F2_SERMDF');
        parent::addAttribute('F2_DOC_INT');
        parent::addAttribute('F2_SER_INT');
        parent::addAttribute('F2_ROMANEI');
        parent::addAttribute('F2_ZZDTRET');
        parent::addAttribute('F2_ZZDTREL');
        parent::addAttribute('F2_MUNPRES');
        parent::addAttribute('F2_ESTPRES');
        parent::addAttribute('F2_FRTCFOP');
        parent::addAttribute('F2_BSFCPST');
        parent::addAttribute('F2_IDNF');
        parent::addAttribute('F2_PAFMD5');
        parent::addAttribute('F2_BASFECP');
        parent::addAttribute('F2_CMUNOR');
        parent::addAttribute('F2_BSFCCMP');
        parent::addAttribute('F2_UFDEST');
        parent::addAttribute('F2_CMUNDE');
        parent::addAttribute('F2_LOJARET');
        parent::addAttribute('F2_UFORIG');
        parent::addAttribute('F2_CLIRET');
        parent::addAttribute('F2_XXEXPNF');
        parent::addAttribute('F2_XQTDPLT');
        parent::addAttribute('F2_CLIREM');
        parent::addAttribute('F2_LOJAREM');

    }
    /**
     * getNotasByEmissao()
     * @param mixed $dataInicial 
     * @param mixed $dataFinal 
     * @return PDOStatement|false|void 
     */
    public static function getNotasByEmissao($dataInicial, $dataFinal)
    {
        $query = "SELECT DISTINCT EMP, 
                  NF,
                  SERIE, 
                  NRROM
                  FROM(
                  SELECT 'EMP' = 'SOBEL',
                  F2_ROMANEI AS NRROM,
                  F2_DOC     AS NF,
                  F2_SERIE   AS SERIE
                  FROM SF2010 
                  WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                  AND D_E_L_E_T_ = ''
                  
                  UNION ALL
                  
                  SELECT'EMP' = 'JMT',
                  F2_ROMANEI AS NRROM,
                  F2_DOC     AS NF,
                  F2_SERIE   AS SERIE
                  FROM SF2020 
                  WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                  
                  AND D_E_L_E_T_ = ''
                  UNION ALL
                  
                  SELECT'EMP' = '3F',
                  F2_ROMANEI AS NRROM,
                  F2_DOC     AS NF,
                  F2_SERIE   AS SERIE
                  FROM SF2040 
                  WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                  AND D_E_L_E_T_ = ''
                  ) AS RES
                  WHERE NRROM <> ''";

       try
       {
          TTransaction::open('protheus'); 
           $conn = TTransaction::get();         
           $result = $conn->query($query);

           return $result;

          TTransaction::close(); 
       }
       catch (Exception $e)
       {
          new TMessage('error', $e->getMessage());
       }


       return $result;
    }

}