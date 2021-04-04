<?php
/**
 * DoctoCarga
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class DoctoCarga extends TRecord
{
    const TABLENAME = 'GW1010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('GW1_FILIAL');
        parent::addAttribute('GW1_CDTPDC');
        parent::addAttribute('GW1_EMISDC');
        parent::addAttribute('GW1_DTEMIS');
        parent::addAttribute('GW1_NRDC');
        parent::addAttribute('GW1_ORIGEM');
        parent::addAttribute('GW1_SIT');
        parent::addAttribute('GW1_CDREM');
        parent::addAttribute('GW1_NRREG');
        parent::addAttribute('GW1_CDDEST');
        parent::addAttribute('GW1_TPFRET');
        parent::addAttribute('GW1_NRROM');
        parent::addAttribute('GW1_DTIMPL');
        parent::addAttribute('GW1_HRIMPL');
        parent::addAttribute('GW1_ENVEDI');
        parent::addAttribute('GW1_USO');
        parent::addAttribute('GW1_DSESP');
        parent::addAttribute('GW1_QTVOL');
        parent::addAttribute('GW1_CARREG');
        parent::addAttribute('GW1_REGCOM');
        parent::addAttribute('GW1_REPRES');
        parent::addAttribute('GW1_ICMSDC');
        parent::addAttribute('GW1_ORINR');
        parent::addAttribute('GW1_ENTEND');
        parent::addAttribute('GW1_ENTBAI');
        parent::addAttribute('GW1_ENTCEP');
        parent::addAttribute('GW1_ENTNRC');
        parent::addAttribute('GW1_USUIMP');
        parent::addAttribute('GW1_DTLIB');
        parent::addAttribute('GW1_HRLIB');
        parent::addAttribute('GW1_DTPSAI');
        parent::addAttribute('GW1_HRPSAI');
        parent::addAttribute('GW1_DTSAI');
        parent::addAttribute('GW1_HRSAI');
        parent::addAttribute('GW1_DTPENT');
        parent::addAttribute('GW1_HRPENT');
        parent::addAttribute('GW1_DTALT');
        parent::addAttribute('GW1_HRALT');
        parent::addAttribute('GW1_USUALT');
        parent::addAttribute('GW1_DTCAN');
        parent::addAttribute('GW1_HRCAN');
        parent::addAttribute('GW1_USUCAN');
        parent::addAttribute('GW1_AUTSEF');
        parent::addAttribute('GW1_DANFE');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('GW1_SERDC');
        parent::addAttribute('GW1_ORISER');
        parent::addAttribute('GW1_CALCAT');
        parent::addAttribute('GW1_SITFT');
        parent::addAttribute('GW1_ROMTV');
        parent::addAttribute('GW1_MOTFT');
        parent::addAttribute('GW1_ROMCF');
        parent::addAttribute('GW1_ROMTO');
        parent::addAttribute('GW1_SITFT2');
        parent::addAttribute('GW1_MOTFT2');
        parent::addAttribute('GW1_PEDCLI');
        parent::addAttribute('GW1_SITFRE');
        parent::addAttribute('GW1_MOTFRE');
        parent::addAttribute('GW1_DTFRE');
        parent::addAttribute('GW1_SDOC');
        parent::addAttribute('GW1_SDOCOR');
    }
}