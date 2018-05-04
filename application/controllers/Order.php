<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Manager
	 *	- or -
	 * 		http://example.com/index.php/Manager
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
            $this->load->model(array('work','Extra_work','manager_model'));
            //$this->load->model();
            //$this->load->model();
            $this->load->helper(array('text','form'));
            //$this->load->helper();
            $this->load->library(array('form_validation','table'));
            //$this->load->library();
            $this->session;    
            $this->load->view('tna/TNA_header');
    }
    
    function index(){
        redirect('Order/put_detail');
    }
    
    function put_detail(){
        $this->load->view('order/put_detail');
    }
}