<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/ERPgrowel/Stock
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct() {
        parent::__construct();
		$this->load->database('test');
		$this->load->model(array('Stock_model','Extra_work'));
		 $this->load->helper(array('text','form'));
                 $this->load->library(array('table','form_validation'));
                 $this->session;
                 $template = array(
        'table_open'            => '<table class=table>',
        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',
        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',
        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',
        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',
        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',
        'table_close'           => '</table>'
);
                 $this->table->set_template($template);
    }
    
    function index(){
     $this->load->view('Stock/view_all');
    }
    
    function insert(){
        
    }
    
    function add_stockdis(){//Stock discription
        
    }
    
    function add_stocktype(){
        
    }
    function view_stock($usedby=NULL){
        if($usedby=='ALL'){
            $record=$this->Stock_model->viewall();
            echo $this->table->generate($record);
        }
    }
    
    
    
}