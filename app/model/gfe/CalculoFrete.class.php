<?php
/**
 * CalculoFrete
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

class CalculoFrete extends TRecord
{
    const TABLENAME = 'GWF010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
         parent::__construct($id);
         parent::addAttribute('GWF_FILIAL');
         parent::addAttribute('GWF_NRCALC');
         parent::addAttribute('GWF_EMIREM');
         parent::addAttribute('GWF_EMIDES');
         parent::addAttribute('GWF_EMIRED');
         parent::addAttribute('GWF_EMIPAG');
         parent::addAttribute('GWF_TRANSP');
         parent::addAttribute('GWF_ORIGEM');
         parent::addAttribute('GWF_TPCALC');
         parent::addAttribute('GWF_TPFRET');
         parent::addAttribute('GWF_FINCAL');
         parent::addAttribute('GWF_CIDORI');
         parent::addAttribute('GWF_CIDDES');
         parent::addAttribute('GWF_ENDENT');
         parent::addAttribute('GWF_BAIENT');
         parent::addAttribute('GWF_CIDENT');
         parent::addAttribute('GWF_DTCRIA');
         parent::addAttribute('GWF_HRCRIA');
         parent::addAttribute('GWF_USUCRI');
         parent::addAttribute('GWF_DTPREN');
         parent::addAttribute('GWF_HRPREN');
         parent::addAttribute('GWF_CARREG');
         parent::addAttribute('GWF_NRROM');
         parent::addAttribute('GWF_VLAJUS');
         parent::addAttribute('GWF_TPTRIB');
         parent::addAttribute('GWF_BASISS');
         parent::addAttribute('GWF_PCISS');
         parent::addAttribute('GWF_VLISS');
         parent::addAttribute('GWF_BASICM');
         parent::addAttribute('GWF_PCICMS');
         parent::addAttribute('GWF_PCREIC');
         parent::addAttribute('GWF_VLICMS');
         parent::addAttribute('GWF_ICMRET');
         parent::addAttribute('GWF_BAPICO');
         parent::addAttribute('GWF_VLPIS');
         parent::addAttribute('GWF_VLCOFI');
         parent::addAttribute('GWF_FILPRE');
         parent::addAttribute('GWF_NRPREF');
         parent::addAttribute('GWF_NRCONT');
         parent::addAttribute('GWF_IDFRVI');
         parent::addAttribute('GWF_AGRUP');
         parent::addAttribute('GWF_SEQTRE');
         parent::addAttribute('GWF_OBS');
         parent::addAttribute('GWF_IMPOST');
         parent::addAttribute('GWF_CRDICM');
         parent::addAttribute('GWF_CRDPC');
         parent::addAttribute('GWF_NROCO');
         parent::addAttribute('GWF_ADICIS');
         parent::addAttribute('D_E_L_E_T_');
         parent::addAttribute('R_E_C_N_O_');
         parent::addAttribute('R_E_C_D_E_L_');
         parent::addAttribute('GWF_CDESP');
         parent::addAttribute('GWF_CDTPSE');
         parent::addAttribute('GWF_EMISDF');
         parent::addAttribute('GWF_SERDF');
         parent::addAttribute('GWF_NRDF');
         parent::addAttribute('GWF_DTEMDF');
    }


    /**
     * getFaturas
     * @param mixed $dataInicial 
     * @param mixed $dataFinal 
     * @return PDOStatement|false|void 
     */
    public static function getFaturas($dataInicial, $dataFinal)
    {
        /* Faturas de Frete */
        try
       {
          TTransaction::open('protheus'); // abre uma transa????o
           $conn = TTransaction::get(); // obt??m a conex??o
            
            $query = "SELECT GWF_NRDF
            FROM GWF010
            WHERE GWF_NRROM IN (
                                    SELECT DISTINCT NRROM + '01'
                                    FROM(
                                    SELECT F2_ROMANEI AS NRROM
                                    FROM SF2010 
                                    WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                                    AND D_E_L_E_T_ = ''
                                    
                                    UNION ALL
                                    
                                    SELECT F2_ROMANEI AS NRROM
                                    FROM SF2010 
                                    WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                                    
                                    AND D_E_L_E_T_ = ''
                                    UNION ALL
                                    
                                    SELECT F2_ROMANEI AS NRROM
                                    FROM SF2010 
                                    WHERE F2_EMISSAO BETWEEN '{$dataInicial}' AND '{$dataFinal}'
                                    AND D_E_L_E_T_ = ''
                                    ) AS RES
                                    WHERE NRROM <> ''
                                )
            AND D_E_L_E_T_ = ''
            AND GWF_NRDF <> ''";
            // realiza a consulta
            $result = $conn->query($query);
            return $result;

          TTransaction::close(); // fecha a transa????o.
       }
       catch (Exception $e)
       {
          new TMessage('error', $e->getMessage());
       }
       
    }
}    