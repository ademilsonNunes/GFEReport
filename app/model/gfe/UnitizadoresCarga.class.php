<?php
/**
 * UnitizadoresCarga
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class UnitizadoresCarga extends TRecord
{
    const TABLENAME = 'GWB010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);     
        parent::addAttribute('GWB_FILIAL');
        parent::addAttribute('GWB_CDTPDC');
        parent::addAttribute('GWB_EMISDC');
        parent::addAttribute('GWB_SERDC');
        parent::addAttribute('GWB_NRDC');
        parent::addAttribute('GWB_CDUNIT');
        parent::addAttribute('GWB_QTDE');
        parent::addAttribute('GWB_SDOCDC');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('R_E_C_N_O_');

    }
}    


