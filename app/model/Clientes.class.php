<?php
class Clientes extends TRecord
{
    const TABLENAME = 'SA1010';
    const PRIMARYKEY= 'R_E_C_N_O_';
    const IDPOLICY = 'max'; // {max, serial}
    public $nome;

    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('A1_COD');
        parent::addAttribute('A1_NOME');

    }
}