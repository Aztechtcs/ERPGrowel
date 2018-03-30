<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

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
            $this->load->model('work');
            $this->load->model('Extra_work');
            $this->load->model('manager_model');
            $this->load->helper('text');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->session;   
            
    }
    
    function index(){
       // $this->manager_model->json_buyer();
      redirect('Auth/site_map');
    }
   /* function jsbuilder(){
        if(isset($_REQUEST)){
            var_dump($_REQUEST);
        }
        $this->load->view('manager/jsonbuilder');
    }*/
    
    function add_supplier(){
        if($this->input->post()){
            var_dump($_REQUEST);
        }
        //$dbs['formdata']= file_get_contents(site_url('application/views/manager/form.js'));
        $d['formdata']='addnewsupplier.php';
        $d['operation']='Insert new Supplier';
        $this->load->view('manager/dynamic_formbuild',$d);
    }
    
    function get_json($file){
        $this->load->view('manager/'.$file);
    }
    
    function insert_requirement(){
        if($_REQUEST){
            var_dump($_REQUEST);
        }
        $d['formdata']='insert_requirement.php';
        $d['operation']='Insert Requirements Entry';
        $this->load->view('manager/dynamic_formbuild',$d);
    }
    
    
    function cutting_operation(){
        if($this->input->post()){ var_dump($_REQUEST);}
        $d['formdata']='cutting_operation.php';
        $d['operation']='Cutting Operation';
        $this->load->view('manager/dynamic_formbuild',$d);
    }
    function insert_neworder(){
          if($this->input->post()){
            $buyer=$this->input->post('Buyer');
            $style_name=$this->input->post('style_name');
            $order_id=$this->input->post('order_id');
            $color=$this->input->post('color');
            $quantity=$this->input->post('quantity');
            if($buyer!=NULL and $style_name!=null and $order_id!=NULL and $color!=null and $quantity!=null){
                $byuerDB=array('name'=>$buyer);
                $styleDB=array('name'=>$style_name);
                $this->manager_model->add_buyer($byuerDB);
                $Style_id=$this->manager_model->get_stylebyid($styleDB);
                if($Style_id==null){
                     echo "new Style Entered";
                     $Style_id=$this->manager_model->get_stylebyid($styleDB);   
                }
               //var_dump($Style_id->id);
                //$this->manager_model->add_style($styleDB);
                 $orderDB=array('number'=>$order_id,'color'=>$color,'quantity'=>$quantity,
                    'Style_id'=>$Style_id->id,'buyer_name'=>$buyer);
                $this->manager_model->add_order($orderDB);
               //$orderDB=array();
                // var_dump($_REQUEST);
            }     
          }
        $d['formdata']='insert_neworderjson.php';
        $d['operation']='Insert New Order';
        $this->load->view('manager/dynamic_formbuild',$d);
    }
    
    
    
    
    function enter_style(){
        
    }
    
    function new_order(){/*new order entry*/
        if($this->input->post('order_Submit')){
            if($this->input->post('order_number')!=NULL){
                /* MAIN OPERATION */
                var_dump($_REQUEST);
            }
            else{$this->load->view('manager/insert_order');}
        }else{
            $this->load->view('manager/insert_order');
        }
    }
    
    
    
    function insert_febric_receive(){}
    
    function inspection_febric(){}
    
    function cutting(){}
    
    function inspection_cutting(){}
    
    
          
        private function sessionpass(){
            if(isset($_SESSION['ID'])){
                if(isset($_SESSION['pass'])){
                    $d=array('user'=>$this->session->ID,'password'=>$this->session->pass);
                   $da= $this->work->session_check($d);
                   //var_dump(res);
                    if(sizeof($da)>0){
                        $newdata = array(
                        'id'  => $da[0]->id,
                        'email'=> $da[0]->email,
                        'logged_in' => TRUE
                        );
                        //var_dump($da);
                        $this->session->set_userdata($newdata);
                        return true;
                    }
                    else{
                        return false;
                    }   
                }
                else{
                        return false;
                    }
            }
            else{
                        return false;
                    }
        }
        
        function login(){
            $this->load->view('workshedule/login');
            if($this->input->post('id')){
                if($this->input->post('pass')){
                    $id=$this->input->post('id');
                    $pass=$this->input->post('pass');
                    
                        $_SESSION['ID']='';
                        $_SESSION['pass']='';
                        $_SESSION['id']='';
                        $_SESSION['email']='';
                        $_SESSION['logged_in']='';
                        $usr=array('ID'=>$id,'pass'=>$pass);
                        $this->session->set_userdata($usr);
                        
                            redirect('Auth/pg');    
                    
                }
            }
        }
	
}

?>