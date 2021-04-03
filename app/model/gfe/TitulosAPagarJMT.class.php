<?php
/**
 * TitulosAPagarJMT
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;

class TitulosAPagarJMT extends TRecord
{
    const TABLENAME = 'SE1020';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}

    public function __construct($id = NULL)
    {
        parent::__construct($id);       
        parent::addAttribute('E1_FILIAL');
        parent::addAttribute('E1_PREFIXO');
        parent::addAttribute('E1_NUM');
        parent::addAttribute('E1_PARCELA');
        parent::addAttribute('E1_TIPO');
        parent::addAttribute('E1_NATUREZ');
        parent::addAttribute('E1_PORTADO');
        parent::addAttribute('E1_AGEDEP');
        parent::addAttribute('E1_CLIENTE');
        parent::addAttribute('E1_LOJA');
        parent::addAttribute('E1_NOMCLI');
        parent::addAttribute('E1_EMISSAO');
        parent::addAttribute('E1_VENCTO');
        parent::addAttribute('E1_VENCREA');
        parent::addAttribute('E1_VALOR');
        parent::addAttribute('E1_BASEIRF');
        parent::addAttribute('E1_ISS');
        parent::addAttribute('E1_IRRF');
        parent::addAttribute('E1_NUMBCO');
        parent::addAttribute('E1_INDICE');
        parent::addAttribute('E1_BAIXA');
        parent::addAttribute('E1_NUMBOR');
        parent::addAttribute('E1_DATABOR');
        parent::addAttribute('E1_EMIS1');
        parent::addAttribute('E1_HIST');
        parent::addAttribute('E1_LA');
        parent::addAttribute('E1_LOTE');
        parent::addAttribute('E1_MOTIVO');
        parent::addAttribute('E1_MOVIMEN');
        parent::addAttribute('E1_OP');
        parent::addAttribute('E1_SITUACA');
        parent::addAttribute('E1_CONTRAT');
        parent::addAttribute('E1_SALDO');
        parent::addAttribute('E1_SUPERVI');
        parent::addAttribute('E1_VEND1');
        parent::addAttribute('E1_VEND2');
        parent::addAttribute('E1_VEND3');
        parent::addAttribute('E1_VEND4');
        parent::addAttribute('E1_VEND5');
        parent::addAttribute('E1_COMIS1');
        parent::addAttribute('E1_COMIS2');
        parent::addAttribute('E1_COMIS3');
        parent::addAttribute('E1_COMIS4');
        parent::addAttribute('E1_DESCONT');
        parent::addAttribute('E1_COMIS5');
        parent::addAttribute('E1_MULTA');
        parent::addAttribute('E1_JUROS');
        parent::addAttribute('E1_CORREC');
        parent::addAttribute('E1_VALLIQ');
        parent::addAttribute('E1_VENCORI');
        parent::addAttribute('E1_CONTA');
        parent::addAttribute('E1_VALJUR');
        parent::addAttribute('E1_PORCJUR');
        parent::addAttribute('E1_MOEDA');
        parent::addAttribute('E1_BASCOM1');
        parent::addAttribute('E1_BASCOM2');
        parent::addAttribute('E1_BASCOM3');
        parent::addAttribute('E1_BASCOM4');
        parent::addAttribute('E1_BASCOM5');
        parent::addAttribute('E1_FATPREF');
        parent::addAttribute('E1_FATURA');
        parent::addAttribute('E1_OK');
        parent::addAttribute('E1_PROJETO');
        parent::addAttribute('E1_CLASCON');
        parent::addAttribute('E1_VALCOM1');
        parent::addAttribute('E1_VALCOM2');
        parent::addAttribute('E1_VALCOM3');
        parent::addAttribute('E1_VALCOM4');
        parent::addAttribute('E1_VALCOM5');
        parent::addAttribute('E1_OCORREN');
        parent::addAttribute('E1_INSTR1');
        parent::addAttribute('E1_INSTR2');
        parent::addAttribute('E1_PEDIDO');
        parent::addAttribute('E1_DTVARIA');
        parent::addAttribute('E1_VARURV');
        parent::addAttribute('E1_VLCRUZ');
        parent::addAttribute('E1_DTFATUR');
        parent::addAttribute('E1_NUMNOTA');
        parent::addAttribute('E1_SERIE');
        parent::addAttribute('E1_STATUS');
        parent::addAttribute('E1_ORIGEM');
        parent::addAttribute('E1_IDENTEE');
        parent::addAttribute('E1_NUMCART');
        parent::addAttribute('E1_FLUXO');
        parent::addAttribute('E1_DESCFIN');
        parent::addAttribute('E1_DIADESC');
        parent::addAttribute('E1_TIPODES');
        parent::addAttribute('E1_CARTAO');
        parent::addAttribute('E1_CARTVAL');
        parent::addAttribute('E1_CARTAUT');
        parent::addAttribute('E1_ADM');
        parent::addAttribute('E1_VLRREAL');
        parent::addAttribute('E1_TRANSF');
        parent::addAttribute('E1_BCOCHQ');
        parent::addAttribute('E1_AGECHQ');
        parent::addAttribute('E1_CTACHQ');
        parent::addAttribute('E1_NUMLIQ');
        parent::addAttribute('E1_ORDPAGO');
        parent::addAttribute('E1_RECIBO');
        parent::addAttribute('E1_INSS');
        parent::addAttribute('E1_FILORIG');
        parent::addAttribute('E1_DTACRED');
        parent::addAttribute('E1_TIPOFAT');
        parent::addAttribute('E1_TIPOLIQ');
        parent::addAttribute('E1_CSLL');
        parent::addAttribute('E1_COFINS');
        parent::addAttribute('E1_PIS');
        parent::addAttribute('E1_FLAGFAT');
        parent::addAttribute('E1_MESBASE');
        parent::addAttribute('E1_ANOBASE');
        parent::addAttribute('E1_PLNUCOB');
        parent::addAttribute('E1_CODEMP');
        parent::addAttribute('E1_CODINT');
        parent::addAttribute('E1_MATRIC');
        parent::addAttribute('E1_TXMOEDA');
        parent::addAttribute('E1_ACRESC');
        parent::addAttribute('E1_SDACRES');
        parent::addAttribute('E1_DECRESC');
        parent::addAttribute('E1_SDDECRE');
        parent::addAttribute('E1_MULTNAT');
        parent::addAttribute('E1_MSFIL');
        parent::addAttribute('E1_MSEMP');
        parent::addAttribute('E1_PROJPMS');
        parent::addAttribute('E1_DESDOBR');
        parent::addAttribute('E1_NRDOC');
        parent::addAttribute('E1_MODSPB');
        parent::addAttribute('E1_EMITCHQ');
        parent::addAttribute('E1_IDCNAB');
        parent::addAttribute('E1_PLCOEMP');
        parent::addAttribute('E1_PLTPCOE');
        parent::addAttribute('E1_CODCOR');
        parent::addAttribute('E1_PARCCSS');
        parent::addAttribute('E1_CODORCA');
        parent::addAttribute('E1_CODIMOV');
        parent::addAttribute('E1_FILDEB');
        parent::addAttribute('E1_NUMRA');
        parent::addAttribute('E1_NUMSOL');
        parent::addAttribute('E1_INSCRIC');
        parent::addAttribute('E1_SERREC');
        parent::addAttribute('E1_CODBAR');
        parent::addAttribute('E1_DATAEDI');
        parent::addAttribute('E1_CODDIG');
        parent::addAttribute('E1_CHQDEV');
        parent::addAttribute('E1_LIDESCF');
        parent::addAttribute('E1_VLBOLSA');
        parent::addAttribute('E1_NUMCRD');
        parent::addAttribute('E1_VLFIES');
        parent::addAttribute('E1_DEBITO');
        parent::addAttribute('E1_CCD');
        parent::addAttribute('E1_ITEMD');
        parent::addAttribute('E1_CLVLDB');
        parent::addAttribute('E1_CREDIT');
        parent::addAttribute('E1_CCC');
        parent::addAttribute('E1_ITEMC');
        parent::addAttribute('E1_CLVLCR');
        parent::addAttribute('E1_DESCON1');
        parent::addAttribute('E1_DESCON2');
        parent::addAttribute('E1_DTDESC3');
        parent::addAttribute('E1_DTDESC1');
        parent::addAttribute('E1_DTDESC2');
        parent::addAttribute('E1_VLMULTA');
        parent::addAttribute('E1_DESCON3');
        parent::addAttribute('E1_MOTNEG');
        parent::addAttribute('E1_SABTPIS');
        parent::addAttribute('E1_SABTCOF');
        parent::addAttribute('E1_SABTCSL');
        parent::addAttribute('E1_FORNISS');
        parent::addAttribute('E1_PARTOT');
        parent::addAttribute('E1_SITFAT');
        parent::addAttribute('E1_BASEPIS');
        parent::addAttribute('E1_BASECOF');
        parent::addAttribute('E1_BASECSL');
        parent::addAttribute('E1_VRETISS');
        parent::addAttribute('E1_PARCIRF');
        parent::addAttribute('E1_SCORGP');
        parent::addAttribute('E1_FRETISS');
        parent::addAttribute('E1_TXMDCOR');
        parent::addAttribute('E1_SATBIRF');
        parent::addAttribute('E1_TIPREG');
        parent::addAttribute('E1_CONEMP');
        parent::addAttribute('E1_VERCON');
        parent::addAttribute('E1_SUBCON');
        parent::addAttribute('E1_VERSUB');
        parent::addAttribute('E1_PLLOTE');
        parent::addAttribute('E1_PLOPELT');
        parent::addAttribute('E1_CODRDA');
        parent::addAttribute('E1_FORMREC');
        parent::addAttribute('E1_BCOCLI');
        parent::addAttribute('E1_AGECLI');
        parent::addAttribute('E1_CTACLI');
        parent::addAttribute('E1_PARCFET');
        parent::addAttribute('E1_FETHAB');
        parent::addAttribute('E1_MDCRON');
        parent::addAttribute('E1_MDCONTR');
        parent::addAttribute('E1_MEDNUME');
        parent::addAttribute('E1_MDPLANI');
        parent::addAttribute('E1_MDPARCE');
        parent::addAttribute('E1_MDREVIS');
        parent::addAttribute('E1_NUMMOV');
        parent::addAttribute('E1_PREFORI');
        parent::addAttribute('E1_NODIA');
        parent::addAttribute('E1_TITPAI');
        parent::addAttribute('E1_DOCTEF');
        parent::addAttribute('E1_MDMULT');
        parent::addAttribute('E1_JURFAT');
        parent::addAttribute('E1_MDBONI');
        parent::addAttribute('E1_MDDESC');
        parent::addAttribute('E1_RELATO');
        parent::addAttribute('E1_BASEINS');
        parent::addAttribute('E1_MULTDIA');
        parent::addAttribute('E1_NFELETR');
        parent::addAttribute('E1_RETCNTR');
        parent::addAttribute('E1_NUMCON');
        parent::addAttribute('E1_TURMA');
        parent::addAttribute('E1_IDLAN');
        parent::addAttribute('E1_NSUTEF');
        parent::addAttribute('E1_SABTIRF');
        parent::addAttribute('E1_IDAPLIC');
        parent::addAttribute('E1_PROCEL');
        parent::addAttribute('E1_NOPER');
        parent::addAttribute('E1_SERVICO');
        parent::addAttribute('E1_DIACTB');
        parent::addAttribute('E1_IDBOLET');
        parent::addAttribute('E1_VRETIRF');
        parent::addAttribute('E1_BASEISS');
        parent::addAttribute('E1_VLBOLP');
        parent::addAttribute('E1_APLVLMN');
        parent::addAttribute('E1_LTCXA');
        parent::addAttribute('E1_NUMINSC');
        parent::addAttribute('E1_CODISS');
        parent::addAttribute('E1_SEQBX');
        parent::addAttribute('E1_VLMINIS');
        parent::addAttribute('E1_TPDP');
        parent::addAttribute('E1_PARTPDP');
        parent::addAttribute('D_E_L_E_T_');
        parent::addAttribute('R_E_C_N_O_');
        parent::addAttribute('R_E_C_D_E_L_');
        parent::addAttribute('E1_CODIRRF');
        parent::addAttribute('E1_ZZDTREC');
        parent::addAttribute('E1_ZZSRECB');
        parent::addAttribute('E1_ZZPORT');
        parent::addAttribute('E1_ZZAGE');
        parent::addAttribute('E1_ZZCONT');
        parent::addAttribute('E1_ZZVRLIQ');
        parent::addAttribute('E1_USERLGI');
        parent::addAttribute('E1_USERLGA');
        parent::addAttribute('E1_IDMOV');
        parent::addAttribute('E1_NUMPRO');
        parent::addAttribute('E1_INDPRO');
        parent::addAttribute('E1_PRINSS');
        parent::addAttribute('E1_PARCFAB');
        parent::addAttribute('E1_PARCFAC');
        parent::addAttribute('E1_TPDESC');
        parent::addAttribute('E1_FACS');
        parent::addAttribute('E1_FABOV');
        parent::addAttribute('E1_RATFIN');
        parent::addAttribute('E1_PRISS');
        parent::addAttribute('E1_FAMAD');
        parent::addAttribute('E1_PARCFAM');
        parent::addAttribute('E1_FMPEQ');
        parent::addAttribute('E1_PARCFMP');
        parent::addAttribute('E1_PRODUTO');
        parent::addAttribute('E1_PERLET');
        parent::addAttribute('E1_CHAVENF');
        parent::addAttribute('E1_CTRBCO');
        parent::addAttribute('E1_MENFAT');
        parent::addAttribute('E1_MENFIN');
        parent::addAttribute('E1_MENCOB1');
        parent::addAttribute('E1_MENCOB2');
        parent::addAttribute('E1_MENCOB3');
        parent::addAttribute('E1_MENCOB4');
        parent::addAttribute('E1_MENCOB5');
        parent::addAttribute('E1_FUNDESA');
        parent::addAttribute('E1_IMAMT');
        parent::addAttribute('E1_FASEMT');
        parent::addAttribute('E1_PARFUND');
        parent::addAttribute('E1_PARIMA');
        parent::addAttribute('E1_PARFASE');
        parent::addAttribute('E1_BOLETO');
        parent::addAttribute('E1_DESCJUR');
        parent::addAttribute('E1_CCUSTO');
        parent::addAttribute('E1_CODRET');
        parent::addAttribute('E1_CDRETCS');
        parent::addAttribute('E1_CDRETIR');
        parent::addAttribute('E1_CLVL');
        parent::addAttribute('E1_ITEMCTA');
        parent::addAttribute('E1_TPESOC');
        parent::addAttribute('E1_CNO');
        parent::addAttribute('E1_CONHTL');
        parent::addAttribute('E1_TCONHTL');
        parent::addAttribute('E1_SDOC');
        parent::addAttribute('E1_SDOCREC');
        parent::addAttribute('E1_ZZEMIBO');
        parent::addAttribute('E1_ZZDTRET');
        parent::addAttribute('E1_ZZPGCOM');
        parent::addAttribute('E1_VRETBIS');
        parent::addAttribute('E1_CODSERV');
        parent::addAttribute('E1_BTRISS');
    }
}