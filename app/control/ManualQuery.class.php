<?php
class ManualQuery extends TPage
{

    public function __construct()
    {
       parent::__construct();

       try
       {
          TTransaction::open('protheus'); // abre uma transação
           $conn = TTransaction::get(); // obtém a conexão
        
            // realiza a consulta
            $result = $conn->query("SELECT TOP 10 * FROM SA1010 WHERE D_E_L_E_T_ = ''");
        
            foreach ($result as $row) // exibe os resultados
            {
               print $row['A1_COD'] . '-';
               print $row['A1_NOME'] . "<br>\n";
            }

          TTransaction::close(); // fecha a transação.
       }
       catch (Exception $e)
       {
          new TMessage('error', $e->getMessage());
       }
    }

} 