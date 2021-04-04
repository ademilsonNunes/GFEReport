<?php
/**
 * RomaneioCarga
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class RomaneioCarga extends TRecord
{
    const TABLENAME = 'GWN010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('GWN_FILIAL');
        parent::addAttribute('GWN_NRROM');
        parent::addAttribute('GWN_CDTPOP');
        parent::addAttribute('GWN_CDCLFR');
        parent::addAttribute('GWN_CDTRP');
        parent::addAttribute('GWN_CDMTR');
        parent::addAttribute('GWN_CDMTR2');
        parent::addAttribute('GWN_CDTPVC');
        parent::addAttribute('GWN_PLACAD');
        parent::addAttribute('GWN_PLACAT');
        parent::addAttribute('GWN_PLACAM');
        parent::addAttribute('GWN_SIT');
        parent::addAttribute('GWN_DTIMPL');
        parent::addAttribute('GWN_HRIMPL');
        parent::addAttribute('GWN_CALC');
        parent::addAttribute('GWN_DTCALC');
        parent::addAttribute('GWN_HRCALC');
        parent::addAttribute('GWN_USUIMP');
        parent::addAttribute('GWN_ORI');
        parent::addAttribute('GWN_PRIOR');
        parent::addAttribute('GWN_DTSAI');
        parent::addAttribute('GWN_HRSAI');
        parent::addAttribute('GWN_DISTAN');
        parent::addAttribute('GWN_NRCIDD');
        parent::addAttribute('GWN_CEPD');
        parent::addAttribute('GWN_BLOQPF');
        parent::addAttribute('GWN_OBS');
        parent::addAttribute('GWN_AGRUP');
        parent::addAttribute('GWN_MTCALC');
        parent::addAttribute('GWN_RASTR');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_');
        parent::addAttribute('GWN_VALEP');
        parent::addAttribute('GWN_VPVAL');
        parent::addAttribute('GWN_VPNUM');
        parent::addAttribute('GWN_VPCDOP');
        parent::addAttribute('GWN_DTRET');
        parent::addAttribute('GWN_HRRET');
        parent::addAttribute('GWN_HODSAI');
        parent::addAttribute('GWN_HODRET');
        parent::addAttribute('GWN_FECHAM');
        parent::addAttribute('GWN_DTFECH');
        parent::addAttribute('GWN_NRCIDO');
        parent::addAttribute('GWN_CEPO');
        parent::addAttribute('GWN_NRMOV');
        parent::addAttribute('GWN_MOTREA');
        parent::addAttribute('GWN_DTREAB');
        parent::addAttribute('GWN_HRREAB');
        parent::addAttribute('GWN_USUREA');
        parent::addAttribute('GWN_LACRE');
        parent::addAttribute('GWN_VIAGEM');
        parent::addAttribute('GWN_CPESO');
        parent::addAttribute('GWN_CVOL');
        parent::addAttribute('GWN_CVAL');
        parent::addAttribute('GWN_CQTDE');
        parent::addAttribute('GWN_ENVNFE');
        parent::addAttribute('GWN_MOTNFE');
        parent::addAttribute('GWN_NRCT');
    }
}    