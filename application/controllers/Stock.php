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
		$this->load->model('Stock');
                $this->load->model('Extra_work');
		 $this->load->helper('text');
                 $this->load->helper('form');
                 $this->load->library('form_validation');
                 $this->session;
                 
                
    }
    
    function index(){
        
    }
    
    function insert(){
        
    }
    
    function add_stockdis(){//Stock discription
        
    }
    
    function add_stocktype(){
        
    }
    function view_stock($usedby=NULL){
        
    }
    
    
    
}