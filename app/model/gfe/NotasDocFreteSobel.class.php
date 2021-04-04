<?php
/**
 * NotasDocFreteSobel
 *
 * @version    1.0
 * @package    model
 * @subpackage gfe
 * @author     Ademilson Nunes
 * @copyright 
 * @license   
 */
use Adianti\Database\TRecord;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class NotasDocFreteSobel extends TRecord
{
    const TABLENAME = 'GW4010';
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
    /**
     * getDocsFrete()
     * @param mixed $nota 
     * @return PDOStatement|false|void 
     */
   public static function getDocsFrete($nota, $serie)
   {
       $query = "SELECT EMP,
       GW4_EMISDF,
	   GW4_CDESP,
	   GW4_SERDF,
	   GW4_NRDF,
	   GW4_DTEMIS,
	   GW4_NRDC,
	   GW4_TPDC,
	   GW4_SERDC,
	   GW4_EMISDC,
	   GW4_SDOCDC
       FROM(
       SELECT EMP = 'SOBEL',
              GW4_EMISDF,
       	   GW4_CDESP,
       	   GW4_SERDF,
       	   GW4_NRDF,
       	   GW4_DTEMIS,
       	   GW4_NRDC,
       	   GW4_TPDC,
       	   GW4_SERDC,
       	   GW4_EMISDC,
       	   GW4_SDOCDC,
       	   R_E_C_N_O_
       FROM GW4010 
       WHERE GW4_NRDC = '{$nota}' 
       AND GW4_SERDC = '{$serie}' 
       AND D_E_L_E_T_  = ''
       
       UNION ALL
       
       SELECT EMP = 'JMT', 
              GW4_EMISDF,
       	   GW4_CDESP,
       	   GW4_SERDF,
       	   GW4_NRDF,
       	   GW4_DTEMIS,
       	   GW4_NRDC,
       	   GW4_TPDC,
       	   GW4_SERDC,
       	   GW4_EMISDC,
       	   GW4_SDOCDC,
       	   R_E_C_N_O_
       FROM GW4020
       WHERE GW4_NRDC = '{$nota}'  
       AND GW4_SERDC = '{$serie}'  
       AND D_E_L_E_T_  = ''
       
       UNION ALL
       
       SELECT EMP = '3F', 
              GW4_EMISDF,
       	      GW4_CDESP,
       	      GW4_SERDF,
       	      GW4_NRDF,
       	      GW4_DTEMIS,
       	      GW4_NRDC,
       	      GW4_TPDC,
       	      GW4_SERDC,
       	      GW4_EMISDC,
       	      GW4_SDOCDC,
       	      R_E_C_N_O_
       FROM GW4040
       WHERE GW4_NRDC = '{$nota}' 
       AND GW4_SERDC = '{$serie}' 
       AND D_E_L_E_T_  = ''
       )AS RES
       ";
 
       try
       {
           TTransaction::open('protheus'); 
            $conn = TTransaction::get();         
            $result = $conn->query($query);

           return $result; 
           
           TTransaction::close();

       }
       catch (Exception $e)
       {
          new TMessage('error', $e->getMessage());
       }
   }          
}