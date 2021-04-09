<?php

use Adianti\Control\TPage;
use Adianti\Database\TCriteria;
use Adianti\Database\TExpression;
use Adianti\Database\TFilter;
use Adianti\Database\TRepository;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Form\TLabel;
use League\Flysystem\Plugin\ForcedRename;

/**
 * GFERport
 *
 * @version    1.0
 * @package    control
 * @subpackage gfe
 * @author     Ademilson
 * @copyright  
 * @license   
 */
class GFEReport extends TPage
{
    public function __construct()
    {
        parent::__construct();
     
         
        $nfSaida = new NFSaidaSobel();
        $notas   = $nfSaida->getNotasByEmissao('20210201', '20210228');
        $i = 1;        
        foreach($notas as $nota)
        {
            $res[$i]['NF']     = $nota['NF'];
            $res[$i]['SERIE'] = $nota['SERIE'];
            try
            {
               TTransaction::open('protheus'); // abre uma transação            
                $conn = TTransaction::get(); // obtém a conexão
             
                 // realiza a consulta
                 $result = $conn->query("SELECT * FROM GW4010 WHERE GW4_NRDC = '{$res[$i]['NF']}' AND GW4_SERDC = '{$res[$i]['SERIE']}' AND D_E_L_E_T_ = '' ");
             
                 foreach ($result as $row) // exibe os resultados
                 {               
                     
                    print   $row['GW4_EMISDF'] . '-' . $row['GW4_CDESP'] . '-' . $row['GW4_SERDF'] . '-' . $row['GW4_NRDF'] 
                    . '-' . $row['GW4_DTEMIS'] . '-' . $row['GW4_NRDC'] . '-' . $row['GW4_TPDC'] . '-' . $row['GW4_NRDC'] 
                    . '-' . $row['GW4_EMISDC'] . '-' . $row['GW4_SDOCDC'] . '<br>';  
                 }
     
               TTransaction::close(); // fecha a transação.
            }
            catch (Exception $e)
            {
               new TMessage('error', $e->getMessage());
            }
            $i++;   
        }

              echo date('d-m-Y h:i:s');
              d($res);  
        
        




        /*
        for($i = 1; $i <= count($res); $i++)
        {
            $docsFrete = new NotasDocFreteSobel();
            $docs = $docsFrete->getDocsFrete($res['NF'], $res['SERIE']);   
            
            foreach($docs as $doc)
            {
                echo $doc['EMP'] . '-' . $nota['EMP'] . '-' . $nota['NF'] . '-' . $doc['GW4_EMISDF'] . '-' . $doc['GW4_CDESP'] . '-' . $doc['GW4_SERDF'] . '-' . $doc['GW4_NRDF'] . '-' . $doc['GW4_DTEMIS'] . '-' . $doc['GW4_NRDC'] . '-' . $doc['GW4_TPDC'] . '-' . $doc['GW4_NRDC'] . '-' . $doc['GW4_EMISDC']. '-' . $doc['GW4_SDOCDC'] . '<br>';  
            }
          
            
        }
        */
   

        /*
        foreach($notas as $nota)
        {
             $docsFrete = new NotasDocFreteSobel();
             $docs = $docsFrete->getDocsFrete($nota['NF'], $nota['SERIE']);
            foreach($docs as $doc)
            {
                echo $doc['EMP'] . '-' . $nota['EMP'] . '-' . $nota['NF'] . '-' . $doc['GW4_EMISDF'] . '-' . $doc['GW4_CDESP'] . '-' . $doc['GW4_SERDF'] . '-' . $doc['GW4_NRDF'] . '-' . $doc['GW4_DTEMIS'] . '-' . $doc['GW4_NRDC'] . '-' . $doc['GW4_TPDC'] . '-' . $doc['GW4_NRDC'] . '-' . $doc['GW4_EMISDC']. '-' . $doc['GW4_SDOCDC'] . '<br>';
            
            }   
        }         


        */

     
        /* Romaneio */
        /*
        try     
        {
            TTransaction::open('protheus');
            $criteria = new TCriteria();
            $criteria->add(new TFilter('D_E_L_E_T_', '=', ''), TExpression::AND_OPERATOR);
            $criteria->add(new TFilter('ZZQ_ROMANE', '=', '200143'), TExpression::AND_OPERATOR);

            $repository = new TRepository('RomaneioZZQ');
            $romaneios = $repository->load($criteria);
            foreach ($romaneios as $romaneio)
            {
                echo $romaneio->ZZQ_ROMANE. ' - ' . $romaneio->ZZQ_DESTRA . '<br>';
            }
            TTransaction::close();
        } 
        catch (Exception $e) 
        {
            new TMessage('error', $e->getMessage());       
        }
        */
    }
}