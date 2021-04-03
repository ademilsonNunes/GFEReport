<?php
/**
 * RomaneioZZQ
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class RomaneioZZQ extends TRecord
{
    const TABLENAME = 'ZZQ010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('ZZQ_FILIAL');
        parent::addAttribute('ZZQ_ROMANE');
        parent::addAttribute('ZZQ_EMIROM');
        parent::addAttribute('ZZQ_STATUS');
        parent::addAttribute('ZZQ_TRANSP');
        parent::addAttribute('ZZQ_DESTRA');
        parent::addAttribute('ZZQ_DTCARR');
        parent::addAttribute('ZZQ_ENTREG');
        parent::addAttribute('ZZQ_TPVEIC');
        parent::addAttribute('ZZQ_DESVEI');
        parent::addAttribute('ZZQ_PLACA');
        parent::addAttribute('ZZQ_TPCARG');
        parent::addAttribute('ZZQ_QTDROM');
        parent::addAttribute('ZZQ_PESO');
        parent::addAttribute('ZZQ_QTDCXS');
        parent::addAttribute('ZZQ_MOTORI');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('ZZQ_VLRROM');
    }
}    