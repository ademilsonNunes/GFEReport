<?php
/**
 * FaturasFreteJMT
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class FaturasFreteJMT extends TRecord
{
    const TABLENAME = 'GW6020';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}
    public $nome;

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('GW6_FILIAL');
        parent::addAttribute('GW6_EMIFAT');
        parent::addAttribute('GW6_SERFAT');
        parent::addAttribute('GW6_NRFAT');
        parent::addAttribute('GW6_DTEMIS');
        parent::addAttribute('GW6_VLFATU');
        parent::addAttribute('GW6_VLDESC');
        parent::addAttribute('GW6_VLICMS');
        parent::addAttribute('GW6_VLICRE');
        parent::addAttribute('GW6_VLISS');
        parent::addAttribute('GW6_VLISRE');
        parent::addAttribute('GW6_VLJURO');
        parent::addAttribute('GW6_DTCRIA');
        parent::addAttribute('GW6_DTVENC');
        parent::addAttribute('GW6_ORIGEM');
        parent::addAttribute('GW6_DTBLOQ');
        parent::addAttribute('GW6_HRBLOQ');
        parent::addAttribute('GW6_USUBLO');
        parent::addAttribute('GW6_MOTBLO');
        parent::addAttribute('GW6_SITAPR');
        parent::addAttribute('GW6_DTAPR');
        parent::addAttribute('GW6_HRAPR');
        parent::addAttribute('GW6_USUAPR');
        parent::addAttribute('GW6_MOTDES');
        parent::addAttribute('GW6_SITFIN');
        parent::addAttribute('GW6_DTFIN');
        parent::addAttribute('GW6_HRFIN');
        parent::addAttribute('GW6_USUFIN');
        parent::addAttribute('GW6_OBS');
        parent::addAttribute('GW6_MOTFIN');
        parent::addAttribute('GW6_SITMLA');
        parent::addAttribute('GW6_MOTMLA');
        parent::addAttribute('GW6_USUIMP');
        parent::addAttribute('GW6_DINDEN');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('GW6_VLIRRF');
        parent::addAttribute('GW6_NATURE');
    }

}    




