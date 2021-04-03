<?php
/**
 * DoctoFreteJMT
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class DoctoFreteJMT extends TRecord
{
    const TABLENAME = 'GW3020';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('GW3_FILIAL');
        parent::addAttribute('GW3_CDESP');
        parent::addAttribute('GW3_EMISDF');
        parent::addAttribute('GW3_SERDF');
        parent::addAttribute('GW3_NRDF');
        parent::addAttribute('GW3_DTEMIS');
        parent::addAttribute('GW3_TPDF');
        parent::addAttribute('GW3_DTENT');
        parent::addAttribute('GW3_CFOP');
        parent::addAttribute('GW3_SIT');
        parent::addAttribute('GW3_USUIMP');
        parent::addAttribute('GW3_CDREM');
        parent::addAttribute('GW3_CDDEST');
        parent::addAttribute('GW3_VLDF');
        parent::addAttribute('GW3_TAXAS');
        parent::addAttribute('GW3_FRPESO');
        parent::addAttribute('GW3_FRVAL');
        parent::addAttribute('GW3_PEDAG');
        parent::addAttribute('GW3_PDGFRT');
        parent::addAttribute('GW3_ICMPDG');
        parent::addAttribute('GW3_PDGPIS');
        parent::addAttribute('GW3_QTDCS');
        parent::addAttribute('GW3_QTVOL');
        parent::addAttribute('GW3_VOLUM');
        parent::addAttribute('GW3_PESOR');
        parent::addAttribute('GW3_PESOC');
        parent::addAttribute('GW3_VLCARG');
        parent::addAttribute('GW3_TRBIMP');
        parent::addAttribute('GW3_BASIMP');
        parent::addAttribute('GW3_PCIMP');
        parent::addAttribute('GW3_VLIMP');
        parent::addAttribute('GW3_IMPRET');
        parent::addAttribute('GW3_PCRET');
        parent::addAttribute('GW3_OBS');
        parent::addAttribute('GW3_CRDICM');
        parent::addAttribute('GW3_CTE');
        parent::addAttribute('GW3_MOTBLQ');
        parent::addAttribute('GW3_DTBLQ');
        parent::addAttribute('GW3_USUBLQ');
        parent::addAttribute('GW3_MOTAPR');
        parent::addAttribute('GW3_DTAPR');
        parent::addAttribute('GW3_USUAPR');
        parent::addAttribute('GW3_EMIFAT');
        parent::addAttribute('GW3_SERFAT');
        parent::addAttribute('GW3_NRFAT');
        parent::addAttribute('GW3_DTEMFA');
        parent::addAttribute('GW3_FILFAT');
        parent::addAttribute('GW3_CDCONS');
        parent::addAttribute('GW3_ORINR');
        parent::addAttribute('GW3_ORISER');
        parent::addAttribute('GW3_ORIDTE');
        parent::addAttribute('GW3_ACINT');
        parent::addAttribute('GW3_DTFIS');
        parent::addAttribute('GW3_SITFIS');
        parent::addAttribute('GW3_DTREC');
        parent::addAttribute('GW3_SITREC');
        parent::addAttribute('GW3_PRITDF');
        parent::addAttribute('GW3_BASCOF');
        parent::addAttribute('GW3_VLCOF');
        parent::addAttribute('GW3_BASPIS');
        parent::addAttribute('GW3_MOTFIS');
        parent::addAttribute('GW3_VLPIS');
        parent::addAttribute('GW3_CRDPC');
        parent::addAttribute('GW3_MOTREC');
        parent::addAttribute('GW3_NATFRE');
        parent::addAttribute('GW3_TPCTB');
        parent::addAttribute('GW3_DTVNFT');
        parent::addAttribute('GW3_ORIGEM');
        parent::addAttribute('GW3_TPCTE');
        parent::addAttribute('GW3_CPDGFE');
        parent::addAttribute('GW3_TES');
        parent::addAttribute('GW3_CONTA');
        parent::addAttribute('GW3_ITEMCT');
        parent::addAttribute('GW3_CC');
        parent::addAttribute('GW3_SITMLA');
        parent::addAttribute('GW3_MOTMLA');
        parent::addAttribute('GW3_HRAPR');
        parent::addAttribute('GW3_SITCUS');
        parent::addAttribute('GW3_CDTPSE');
        parent::addAttribute('GW3_DESCUS');
        parent::addAttribute('GW3_DTCUS');
        parent::addAttribute('GW3_USUCUS');
        parent::addAttribute('GW3_MOTCUS');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
    }
}    