<?php
/**
 * PedidoVendaSobel
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class PedidoVendaSobel extends TRecord
{
    const TABLENAME = 'SC5010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('C5_FILIAL');
        parent::addAttribute('C5_NUM');
        parent::addAttribute('C5_TIPO');
        parent::addAttribute('C5_CLIENTE');
        parent::addAttribute('C5_LOJACLI');
        parent::addAttribute('C5_CLIENT');
        parent::addAttribute('C5_LOJAENT');
        parent::addAttribute('C5_ZZTIPO');
        parent::addAttribute('C5_TRANSP');
        parent::addAttribute('C5_VOLUME1');
        parent::addAttribute('C5_ESPECI1');
        parent::addAttribute('C5_TIPOCLI');
        parent::addAttribute('C5_CONDPAG');
        parent::addAttribute('C5_TABELA');
        parent::addAttribute('C5_VEND1');
        parent::addAttribute('C5_COMIS1');
        parent::addAttribute('C5_VEND2');
        parent::addAttribute('C5_COMIS2');
        parent::addAttribute('C5_VEND3');
        parent::addAttribute('C5_COMIS3');
        parent::addAttribute('C5_VEND4');
        parent::addAttribute('C5_COMIS4');
        parent::addAttribute('C5_VEND5');
        parent::addAttribute('C5_COMIS5');
        parent::addAttribute('C5_DESC1');
        parent::addAttribute('C5_DESC2');
        parent::addAttribute('C5_DESC3');
        parent::addAttribute('C5_DESC4');
        parent::addAttribute('C5_BANCO');
        parent::addAttribute('C5_DESCFI');
        parent::addAttribute('C5_EMISSAO');
        parent::addAttribute('C5_FECENT');
        parent::addAttribute('C5_ZZPEDCL');
        parent::addAttribute('C5_COTACAO');
        parent::addAttribute('C5_PARC1');
        parent::addAttribute('C5_DATA1');
        parent::addAttribute('C5_PARC2');
        parent::addAttribute('C5_DATA2');
        parent::addAttribute('C5_PARC3');
        parent::addAttribute('C5_DATA3');
        parent::addAttribute('C5_DESPESA');
        parent::addAttribute('C5_FRETAUT');
        parent::addAttribute('C5_REAJUST');
        parent::addAttribute('C5_MOEDA');
        parent::addAttribute('C5_PARC4');
        parent::addAttribute('C5_DATA4');
        parent::addAttribute('C5_TPFRETE');
        parent::addAttribute('C5_FRETE');
        parent::addAttribute('C5_SEGURO');
        parent::addAttribute('C5_PESOL');
        parent::addAttribute('C5_PBRUTO');
        parent::addAttribute('C5_REIMP');
        parent::addAttribute('C5_REDESP');
        parent::addAttribute('C5_VOLUME2');
        parent::addAttribute('C5_VOLUME3');
        parent::addAttribute('C5_VOLUME4');
        parent::addAttribute('C5_ESPECI2');
        parent::addAttribute('C5_ESPECI3');
        parent::addAttribute('C5_ESPECI4');
        parent::addAttribute('C5_INCISS');
        parent::addAttribute('C5_LIBEROK');
        parent::addAttribute('C5_OK');
        parent::addAttribute('C5_NOTA');
        parent::addAttribute('C5_SERIE');
        parent::addAttribute('C5_ACRSFIN');
        parent::addAttribute('C5_OS');
        parent::addAttribute('C5_MENNOTA');
        parent::addAttribute('C5_MENPAD');
        parent::addAttribute('C5_KITREP');
        parent::addAttribute('C5_TXMOEDA');
        parent::addAttribute('C5_TIPLIB');
        parent::addAttribute('C5_DESCONT');
        parent::addAttribute('C5_PEDEXP');
        parent::addAttribute('C5_TPCARGA');
        parent::addAttribute('C5_DTLANC');
        parent::addAttribute('C5_PDESCAB');
        parent::addAttribute('C5_BLQ');
        parent::addAttribute('C5_FORNISS');
        parent::addAttribute('C5_CONTRA');
        parent::addAttribute('C5_VLR_FRT');
        parent::addAttribute('C5_MDCONTR');
        parent::addAttribute('C5_MDNUMED');
        parent::addAttribute('C5_GERAWMS');
        parent::addAttribute('C5_MDPLANI');
        parent::addAttribute('C5_ESTPRES');
        parent::addAttribute('C5_SOLFRE');
        parent::addAttribute('C5_SOLOPC');
        parent::addAttribute('C5_ORCRES');
        parent::addAttribute('C5_SUGENT');
        parent::addAttribute('C5_CODED');
        parent::addAttribute('C5_NUMPR');
        parent::addAttribute('C5_RECISS');
        parent::addAttribute('C5_DESCMUN');
        parent::addAttribute('C5_SERSUBS');
        parent::addAttribute('C5_RECFAUT');
        parent::addAttribute('C5_NFSUBST');
        parent::addAttribute('C5_MUNPRES');
        parent::addAttribute('C5_VEICULO');
        parent::addAttribute('C5_PREPEMB');
        parent::addAttribute('C5_OBRA');
        parent::addAttribute('C5_USERLGI');
        parent::addAttribute('C5_USERLGA');
        parent::addAttribute('C5_ZZDESC');
        parent::addAttribute('C5_ZZST');
        parent::addAttribute('C5_ZZHORA');
        parent::addAttribute('C5_ZZUSER');
        parent::addAttribute('C5_ORIGEM');
        parent::addAttribute('C5_NUMENT');
        parent::addAttribute('C5_MOEDTIT');
        parent::addAttribute('C5_TXREF');
        parent::addAttribute('C5_DTTXREF');
        parent::addAttribute('C5_HASHPT');
        parent::addAttribute('C5_CATVSUP');
        parent::addAttribute('C5_INDPRES');
        parent::addAttribute('C5_ZZDTSD');
        parent::addAttribute('C5_ZZPVORI');
        parent::addAttribute('C5_ZZDTPVO');
        parent::addAttribute('C5_ZZOBS1');
        parent::addAttribute('C5_NATUREZ');
        parent::addAttribute('C5_DTESERV');
        parent::addAttribute('C5_SEREXE');
        parent::addAttribute('C5_TABTRF');
        parent::addAttribute('C5_REMCTR');
        parent::addAttribute('C5_REMREV');
        parent::addAttribute('C5_CODEMB');
        parent::addAttribute('C5_TPCOMPL');
        parent::addAttribute('C5_IMINT');
        parent::addAttribute('C5_CGCINT');
        parent::addAttribute('C5_CLIINT');
        parent::addAttribute('C5_SLENVT');
        parent::addAttribute('C5_RET20G');
        parent::addAttribute('C5_PLACA2');
        parent::addAttribute('C5_PLACA1');
        parent::addAttribute('C5_MODANP');
        parent::addAttribute('C5_CODVGLP');
        parent::addAttribute('C5_CODMOT');
        parent::addAttribute('C5_MSBLQL');
        parent::addAttribute('C5_ECPRESN');
        parent::addAttribute('C5_VOLTAPS');
        parent::addAttribute('C5_SDOC');
        parent::addAttribute('C5_SDOCSUB');
        parent::addAttribute('C5_CNO');
        parent::addAttribute('C5_ECSEDEX');
        parent::addAttribute('C5_ECVINCU');
        parent::addAttribute('C5_TIPOBRA');
        parent::addAttribute('C5_PEDECOM');
        parent::addAttribute('C5_RASTR');
        parent::addAttribute('C5_STATUS');
        parent::addAttribute('C5_CODSAF');
        parent::addAttribute('C5_TRCNUM');
        parent::addAttribute('C5_FILGCT');
        parent::addAttribute('C5_ARTOBRA');
        parent::addAttribute('C5_NTEMPEN');
        parent::addAttribute('C5_DTAGEN');
        parent::addAttribute('C5_USERINC');
        parent::addAttribute('C5_INCNAME');
        parent::addAttribute('C5_HRINC');
        parent::addAttribute('C5_DTLIBC');
        parent::addAttribute('C5_HRLIBC');
        parent::addAttribute('C5_USLIBC');
        parent::addAttribute('C5_NOLIBC');
        parent::addAttribute('C5_DTLIBF');
        parent::addAttribute('C5_HRLIBF');
        parent::addAttribute('C5_USLIBF');
        parent::addAttribute('C5_NOLIBF');
        parent::addAttribute('C5_HRFAT');
        parent::addAttribute('C5_DTFAT');
        parent::addAttribute('C5_USFAT');
        parent::addAttribute('C5_NOFATUR');
        parent::addAttribute('C5_USCUS');
        parent::addAttribute('C5_NOMCUST');
        parent::addAttribute('C5_DTLBCUS');
        parent::addAttribute('C5_HRLIBCU');
        parent::addAttribute('C5_LEADTIM');
        parent::addAttribute('C5_DTLIBM');
        parent::addAttribute('C5_HRLIBM');
        parent::addAttribute('C5_USLIBM');
        parent::addAttribute('C5_NOLIBM');
        parent::addAttribute('C5_HRAGEN');
        parent::addAttribute('C5_MARCONT');
        parent::addAttribute('C5_VLRFRET');
        parent::addAttribute('C5_PESOFAT');
        parent::addAttribute('C5_STAPED');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('C5_DTAGEN1');
        parent::addAttribute('C5_HRAGEN2');
        parent::addAttribute('C5_DTAGEN2');
        parent::addAttribute('C5_HRAGEN3');
        parent::addAttribute('C5_MOTAGE1');
        parent::addAttribute('C5_MOTIVO');
        parent::addAttribute('C5_PEDBON');
        parent::addAttribute('C5_PERCBON');
        parent::addAttribute('C5_ROMANEI');
        parent::addAttribute('C5_VLRPED');
        parent::addAttribute('C5_QTDPED');
        parent::addAttribute('C5_REQAGEN');
        parent::addAttribute('C5_ZONA');
        parent::addAttribute('C5_DESZONA');
        parent::addAttribute('C5_ZZLIBFI');
        parent::addAttribute('C5_ZZDTEXP');
        parent::addAttribute('C5_ZZLIBCO');
        parent::addAttribute('C5_ZZUSCOM');
        parent::addAttribute('C5_ZZHRCOM');
        parent::addAttribute('C5_ZZDTCOM');
        parent::addAttribute('C5_FRTCFOP');
        parent::addAttribute('C5_CMUNOR');
        parent::addAttribute('C5_UFDEST');
        parent::addAttribute('C5_CLIRET');
        parent::addAttribute('C5_CMUNDE');
        parent::addAttribute('C5_UFORIG');
        parent::addAttribute('C5_LOJARET');
        parent::addAttribute('C5_XQTDPLT');
        parent::addAttribute('C5_CLIREM');
        parent::addAttribute('C5_LOJAREM');
        parent::addAttribute('C5_ZZLOJA');
    }
}  