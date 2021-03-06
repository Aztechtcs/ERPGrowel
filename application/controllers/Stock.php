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
        if(isset($_REQUEST['Confirm'])){
           $data['stock_id']=$_REQUEST['ItemType'];
           $data['discription']=$_REQUEST['discription'];
           $data['used_by']=$_REQUEST['usedby'];
           if($this->Stock_model->put_stock($data)){
               echo "successfully inserted";
               echo "<a href=".site_url('Stock/insert')."> Insert More</a>";
               
           }
        }
        else{
        $DB=$this->Stock_model->get_stocktype();
        $fl=$DB->result();
        $key=array();
        $val=array();
        foreach($fl as $v){
            array_push($key,$v->id);
            array_push($val,$v->item);
            //$f2=array($v->id =>$v->item);
            //array_combine($rtn[$v->id], $rtn[$v->item);
            //array_push($rtn,$f2);
        }
        $dbs['dbs']=array_combine($key,$val);
       // var_dump($dbs);
        $this->load->view('stock/add_stock',$dbs);
    }
    }
    
    function add_stockdis(){//Stock discription
        
    }
    
    function add_stocktype(){
        
    }
    
    function view_search(){
        if(isset($_REQUEST['id'])){
           // echo "hello view stock result";
           // var_dump($_REQUEST);
            echo $this->table->generate($this->Stock_model->viewall($_REQUEST['id']));
        }else{
            echo "No report";
        }
        
    }
    function view_stock($usedby=NULL){
        if($usedby=='ALL'){
            $record=$this->Stock_model->viewall();
            echo $this->table->generate($record);
        }else{
            echo "filt";
            //echo $this->table->generate($this->Stock_model->viewall($_REQUEST['id']));
        }
    }
    
    
    
}