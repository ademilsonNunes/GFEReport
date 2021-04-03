<?php

use Adianti\Control\TPage;
use Adianti\Database\TCriteria;
use Adianti\Database\TExpression;
use Adianti\Database\TFilter;
use Adianti\Database\TRepository;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectLoad extends TPage
{
     public function __construct()
     {
         parent::__construct();

            try
            {
                TTransaction::open('protheus'); // abre uma transação
            
                $customer = new Clientes(4); // carrega o cliente 4
            
                echo 'Código : ' . $customer->A1_COD. "<br>\n";
                echo 'Nome : '   . $customer->A1_NOME . "<br>\n";
                        
                TTransaction::close(); // fecha a transação.
                
                TTransaction::open('protheus'); // abre uma transação

                $criteria = new TCriteria;
                $criteria->add(new TFilter('A1_COD', '=', '001369'),
                TExpression::OR_OPERATOR);
                
                $repository = new TRepository('Clientes');
                $count = $repository->count($criteria);
                
                new TMessage('info', "Total de clientes encontrados: {$count} <br>\n");

                $repository = new TRepository('Clientes');
                $customers = $repository->load($criteria);
                foreach ($customers as $customer)
                {
                    echo $customer->A1_COD. ' - ' . $customer->A1_NOME . '<br>';
                }
                TTransaction::close(); // fecha a transação.
            }
            catch (Exception $e)
            {
                new TMessage('error', $e->getMessage());            
            }
    }        
}