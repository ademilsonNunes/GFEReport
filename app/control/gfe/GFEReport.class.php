<?php

use Adianti\Control\TPage;
use Adianti\Database\TCriteria;
use Adianti\Database\TExpression;
use Adianti\Database\TFilter;
use Adianti\Database\TRepository;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Form\TLabel;

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

        /* Faturas de Frete */
        $faturas = new CalculoFrete();
        $result  = $faturas->getFaturas('20210201','20210201');

        foreach ($result as $row) // exibe os resultados
        {
           print $row['GWF_NRDF'] . "<br>\n";



           /* Docts */
           try 
           {
                TTransaction::open('protheus');
                $criteria = new TCriteria();
                $criteria->add(new TFilter('D_E_L_E_T_', '=', ''), TExpression::AND_OPERATOR);
                $criteria->add(new TFilter('GW4_NRDF', '=', $row['GWF_NRDF']), TExpression::AND_OPERATOR);


                $repository = new TRepository('NotasDocFreteSobel');
                $notasFreteJMT = $repository->load($criteria);
                foreach ($notasFreteJMT as $notaFrete)
                {
                    if(trim($notaFrete->GW4_TPDC) <> '')
                    {
                        echo $notaFrete->GW4_TPDC . '<br>';
                    }
                    else
                    {   
                        echo  'VAZIO<br>';          
                    }
                    
                }
                   TTransaction::close();
            } 
            catch (Exception $e) 
            {
                new TMessage('error', $e->getMessage());       
            }



        }
          
            

        /* Romaneio */
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
    }
}