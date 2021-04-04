<?php
/**
 * Clientes
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class CompCalcFrete extends TRecord
{
    const TABLENAME = 'GWI010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}
    public $nome;

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('A1_COD');
        parent::addAttribute('A1_NOME');
        parent::addAttribute('GWI_FILIAL');
        parent::addAttribute('GWI_NRCALC');
        parent::addAttribute('GWI_CDCLFR');
        parent::addAttribute('GWI_CDTPOP');
        parent::addAttribute('GWI_CDCOMP');
        parent::addAttribute('GWI_VLFRET');
        parent::addAttribute('GWI_QTCALC');
        parent::addAttribute('GWI_IDMIN');
        parent::addAttribute('GWI_TOTFRE');
        parent::addAttribute('GWI_BASICM');
        parent::addAttribute('GWI_BASPIS');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');

    }
}