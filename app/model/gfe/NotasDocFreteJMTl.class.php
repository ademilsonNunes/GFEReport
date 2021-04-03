<?php
/**
 * NotasDocFreteJMT
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class NotasDocFreteJMT extends TRecord
{
    const TABLENAME = 'GW4020';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('GW4_FILIAL');
        parent::addAttribute('GW4_EMISDF');
        parent::addAttribute('GW4_CDESP');
        parent::addAttribute('GW4_SERDF');
        parent::addAttribute('GW4_NRDF');
        parent::addAttribute('GW4_DTEMIS');
        parent::addAttribute('GW4_NRDC');
        parent::addAttribute('GW4_TPDC');
        parent::addAttribute('GW4_SERDC');
        parent::addAttribute('GW4_EMISDC');
        parent::addAttribute('GW4_SDOCDC');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
    }
}