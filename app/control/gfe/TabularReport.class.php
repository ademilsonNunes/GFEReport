<?php

use Adianti\Widget\Dialog\TMessage;

/**
 * Tabular report
 *
 * @version    1.0
 * @package    samples
 * @subpackage tutor
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class TabularReport extends TPage
{
    private $form; // form
    
    /**
     * Class constructor
     * Creates the page and the registration form
     */
    function __construct()
    {
        parent::__construct();
        
        // creates the form
        $this->form = new BootstrapFormBuilder('form_Customer_report');
        $this->form->setFormTitle('GFE Report');
        
        // create the form fields
        $dataInicial    = new TDate('dataInicial');
        $dataFinal      = new TDate('dataFinal');
        $output_type    = new TRadioGroup('output_type');
        
        $this->form->addFields( [new TLabel('Data Inicial')],     [$dataInicial] );                
        $this->form->addFields( [new TLabel('Data Final')],       [$dataFinal] );
        $this->form->addFields( [new TLabel('Output')],           [$output_type] );
        
        // define field properties
        $dataInicial->setSize( '80%' );
        $dataFinal->setSize( '80%' );
        $options = ['html' =>'HTML', 'pdf' =>'PDF', 'rtf' =>'RTF', 'xls' =>'XLS'];
        $output_type->addItems($options);
        $output_type->setValue('pdf');
        $output_type->setLayout('horizontal');
        
        $this->form->addAction( 'Generate', new TAction(array($this, 'onGenerate')), 'fa:download blue');
        
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
     //   $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($this->form);
        
        parent::add($vbox);
    }
    /**
     * method onGenerate()
     * Executed whenever the user clicks at the generate button
     */
    function onGenerate()
    {
        $data = $this->form->getData();

        $dataInicial =  str_replace('-','',$data->dataInicial);

        new TMessage('info',  $dataInicial );
        /*
        try
        {
            // open a transaction with database 'samples'
            TTransaction::open('protheus');
            
            // get the form data into
            $data = $this->form->getData();
                       
            $repository = new TRepository('Customer');
            $criteria   = new TCriteria;
            if ($data->name)
            {
                $criteria->add(new TFilter('name', 'like', "%{$data->name}%"));
            }
            
            if ($data->city_id)
            {
                $criteria->add(new TFilter('city_id', '=', $data->city_id));
            }
            
           
            $customers = $repository->load($criteria);
            $format  = $data->output_type;
            
            if ($customers)
            {
                $widths = array(40, 200, 80, 120, 80);
                
                switch ($format)
                {
                    case 'html':
                        $table = new TTableWriterHTML($widths);
                        break;
                    case 'pdf':
                        $table = new TTableWriterPDF($widths);
                        break;
                    case 'rtf':
                        $table = new TTableWriterRTF($widths);
                        break;
                    case 'xls':
                        $table = new TTableWriterXLS($widths);
                        break;
                }
                
                if (!empty($table))
                {
                    // create the document styles
                    $table->addStyle('header', 'Helvetica', '16', 'B', '#ffffff', '#4B5D8E');
                    $table->addStyle('title',  'Helvetica', '10', 'B', '#ffffff', '#617FC3');
                    $table->addStyle('datap',  'Helvetica', '10', '',  '#000000', '#E3E3E3', 'LR');
                    $table->addStyle('datai',  'Helvetica', '10', '',  '#000000', '#ffffff', 'LR');
                    $table->addStyle('footer', 'Helvetica', '10', '',  '#2B2B2B', '#B4CAFF');
                    
                    $table->setHeaderCallback( function($table) {
                        $table->addRow();
                        $table->addCell('Customers', 'center', 'header', 5);
                        
                        $table->addRow();
                        $table->addCell('Code',      'center', 'title');
                        $table->addCell('Name',      'left',   'title');
                        $table->addCell('Category',  'center', 'title');
                        $table->addCell('Email',     'left',   'title');
                        $table->addCell('Birthdate', 'center', 'title');
                    });
                    
                    $table->setFooterCallback( function($table) {
                        $table->addRow();
                        $table->addCell(date('Y-m-d h:i:s'), 'center', 'footer', 5);
                    });
                    
                    // controls the background filling
                    $colour= FALSE;
                    
                    // data rows
                    foreach ($customers as $customer)
                    {
                        $style = $colour ? 'datap' : 'datai';
                        $table->addRow();
                        $table->addCell($customer->id,             'center', $style);
                        $table->addCell($customer->name,           'left',   $style);
                        $table->addCell($customer->category_name,  'center', $style);
                        $table->addCell($customer->email,          'left',   $style);
                        $table->addCell($customer->birthdate,      'center', $style);
                        
                        $colour = !$colour;
                    }
                    
                    $output = "app/output/tabular.{$format}";
                    
                    // stores the file
                    if (!file_exists($output) OR is_writable($output))
                    {
                        $table->save($output);
                        parent::openFile($output);
                    }
                    else
                    {
                        throw new Exception(_t('Permission denied') . ': ' . $output);
                    }
                    
                    // shows the success message
                    new TMessage('info', "Report generated. Please, enable popups in the browser. <br> <a href='$output'>Click here for download</a>");
                }
            }
            else
            {
                new TMessage('error', 'No records found');
            }
    
            // fill the form with the active record data
            $this->form->setData($data);
            
            // close the transaction
            TTransaction::close();
        }
        catch (Exception $e) // in case of exception
        {
            new TMessage('error', $e->getMessage());
            TTransaction::rollback();
        }
        */
    }


}

