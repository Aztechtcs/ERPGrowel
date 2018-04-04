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
            $this->load->model(array('work','Extra_work','manager_model'));
            //$this->load->model();
            //$this->load->model();
            $this->load->helper(array('text','form'));
            //$this->load->helper();
            $this->load->library(array('form_validation','table'));
            //$this->load->library();
            $this->session;             
    }
    
    function list_order(){
       //$this->load->view('part_header');
       $ol= $this->manager_model->list_order();
       //$d['content']= $this->table->generate($ol);
       $d['content']=$ol;
       $this->load->view('part_header',$d);
    }
    
    function explore_report(){
        
    }
    
    function explore_order($id=null){
        if($id==null){
            redirect('Manager/list_order');
        }
        $order_id=$id;
        $operation_id=1;
       $d=$this->manager_model->explore_order($order_id,$operation_id);
       echo 'Operation1/Cutting <br>'.$this->table->generate($d);
       $d=$this->manager_model->explore_order($order_id,2);
       echo '<hr><br>Operation 2/Swing <br>'.$this->table->generate($d);
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
        
    function insert_sizedetail($VERIFY=NULL){
        if($this->input->post('Submit')){
            $color=$this->input->post('color');
            $size=$this->input->post('size');
            $quantity=$this->input->post('quantity');
            $c=0;
           
            $this->table->set_heading('number', 'Color', 'Size','quantity','style_id','buyer_name');
            $table=array();
           while(sizeof($color)>$c){
                  //$this->table->add_row($this->session->New_orderid ,$color[$c] ,$size[$c],$quantity[$c]);
                  array_push($table, array($this->session->New_orderid ,$color[$c] ,$size[$c],$quantity[$c]));
                 $this->manager_model->add_order(array('number'=>$this->session->New_orderid,'color'=>$color[$c],'size'=>$size[$c],'quantity'=>$quantity[$c],'style_id'=>$this->session->Style_id,'buyer_name'=>$this->session->buyer_name)); 
            $c++;
           }
           echo $this->table->generate($table);
           
          //$this->insert_sizedetail($table);
           redirect('Manager/view_allorder');
        }
        $this->load->view('manager/insert_sizedetail');
        
    }
    
    function view_allorder(){
         $this->load->library('table');
         $table=$this->manager_model->view_allorder();
        $re['tbl']= $this->table->generate($table);
        $this->load->view('manager/view_allorder',$re);
    }
    
    function insert_orderdetail($data=NULL){
        if($data!=NULL){
            var_dump($data);
        }
        $d['operation']='Operation list';
      /*  if($this->input->post('checkbox-group')!=null){
            //Main Logic after Submit Information Code Here
            foreach($this->input->post('checkbox-group') as $v){
                $d['operation'].=$v.' / ';
               // echo "op ";
            }
        }
       */
        $d['formdata']='operation_list.php';
        $this->load->view('manager/dynamic_formbuild',$d);
        
        //echo 'Insert Order Detail PAge';
    }
    
    function insert_neworder(){
          if($this->input->post()){
            $buyer=$this->input->post('Buyer');
            $style_name=$this->input->post('style_name');
            $order_id=$this->input->post('order_id');
            //$color=$this->input->post('color');
            //$quantity=$this->input->post('quantity');
            if($buyer!=NULL and $style_name!=null and $order_id!=NULL /* and $color!=null and $quantity!=null*/){
                $byuerDB=array('name'=>$buyer);
                $styleDB=array('name'=>$style_name);
                $this->manager_model->add_buyer($byuerDB);
                $Style_id=$this->manager_model->get_stylebyid($styleDB);
                if($Style_id==null){
                     //echo "new Style Entered";
                     $Style_id=$this->manager_model->get_stylebyid($styleDB);   
                }
                //$orderDB=array('number'=>$order_id,'color'=>$color,'quantity'=>$quantity,'Style_id'=>$Style_id->id,'buyer_name'=>$buyer);
                //$this->manager_model->add_order($orderDB);
                $this->session->set_userdata('New_orderid',$order_id );//Number
                $this->session->set_userdata('Style_id',$Style_id->id );
                $this->session->set_userdata('buyer_name',$buyer );
                //redirect('Manager/insert_ordcerdetail/');
                redirect('Manager/insert_sizedetail/');
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