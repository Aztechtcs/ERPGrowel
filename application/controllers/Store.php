<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

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
		$this->load->model(array('Stock_model','Extra_work','Store_Model'));
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
        if($this->input->post('Submit')){
            echo "thankyou";
        }
               
        /* FOR FUTURE USE ONLY */
       // $this->load->view('store/insert_in');
      /*  $store_material=$this->Store_Model->get_flds();
        //var_dump($store_material);
        $smf=array();
         $smc=array();
        foreach($store_material as $k=>$v){
            array_push($smf,$v->Field);
              //var_dump($this->Store_Model->get_colms($v->Field)); 
            //array_push($smf,$v->Field);
           $scols= $this->Store_Model->get_colms($v->Field);
           $rss=array();
           $exc=$v->Field;
            foreach($scols as $ck=>$cv){
                array_push($rss,$cv->$exc);
            }
           // var_dump($rss);
           // $smf->$exc=$rss;
            array_push($smc,$rss);
        }
        
       //array_push();
        
       // var_dump($smf);
       // $x=array_merge($smc,$smf);
      $x['form']= array_combine($smf, $smc); */
      $this->load->view('store/insert_in');
       // var_dump($x);
    }
    
    function show_last5_stock(){
        $last5stock=$rs=$this->Store_Model->show_all_stock();
         echo $this->table->generate($last5stock);
    }
    
    function add_stock(){
        
    }
    
    function search_color(){
         if($this->input->post('id')){
             $rs=$this->Store_Model->search_color($this->input->post('id'));
         }
    }
    
    function search_name(){
        if($this->input->post('id')){
            $rs=$this->Store_Model->search_name($this->input->post('id'));
            $val=array();
            foreach($rs as $v){
                array_push($val, $v->work);
               // echo "<p>$v->work</p>";
               // echo "<br>";
            } 
           // var_dump($val);
            echo form_dropdown('srchname',$val);
           // echo json_encode($rs);
        }
        
    }
}