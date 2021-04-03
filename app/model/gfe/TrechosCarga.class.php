<?php
/**
 * TrechosCarga
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class TrechosCarga extends TRecord
{
    const TABLENAME = 'GWU010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
       parent::__construct($id);
       parent::addAttribute('GWU_FILIAL');
       parent::addAttribute('GWU_CDTPDC');
       parent::addAttribute('GWU_EMISDC');
       parent::addAttribute('GWU_SEQ');
       parent::addAttribute('GWU_SERDC');
       parent::addAttribute('GWU_NRDC');
       parent::addAttribute('GWU_CDTRP');
       parent::addAttribute('GWU_NRCIDD');
       parent::addAttribute('GWU_CDTPVC');
       parent::addAttribute('GWU_PAGAR');
       parent::addAttribute('GWU_DTPENT');
       parent::addAttribute('GWU_HRPENT');
       parent::addAttribute('GWU_DTENT');
       parent::addAttribute('GWU_HRENT');
       parent::addAttribute('GWU_NRCIDO');
       parent::addAttribute('GWU_CEPO');
       parent::addAttribute('GWU_CEPD');
       parent::addAttribute('GWU_CDCLFR');
       parent::addAttribute('GWU_CDTPOP');
       parent::addAttribute('GWU_CHVEXT');
       parent::addAttribute('GWU_SDOC');
       parent::addAttribute('D_E_L_E_T_');
       parent::addAttribute('R_E_C_N_O_');
       parent::addAttribute('R_E_C_D_E_L_');
    }
}    

















