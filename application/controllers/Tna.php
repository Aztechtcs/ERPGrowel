<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tna extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Tna
	 *	- or -
	 * 		http://example.com/index.php/Tna
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
            $this->load->helper(array('text','form'));
            $this->load->library(array('form_validation','table'));
            $this->session;             
    }
    
    private function check_sunday($dump){
        /*if($dump['weekday']=='Sunday'){*/
        if($dump=='Sunday'){
            return false;
        }
        else{
            return true;
        }
    }
    
    function index($startdate=null,$days=90){
        redirect('Tna/enter_detail');
        /*$x=array('todayDate' => date('d/m/Y'),'tomorrowDate' => date('d/m/Y', strtotime(' +1 day')),'nextDay' => date('l', strtotime(' +2 day')));*/
       if($startdate==null){
          $startdate='20180409'; 
       }
       echo date('l',strtotime($startdate));
       // $enddate = date('Y-m-d',strtotime($startdate . ' +1 day'));
       // var_dump($enddate);
        $date_list=array();
        for($i=0;$i<$days;$i++){
            $str=" + $i days";
            $next= date('Y-m-d',strtotime($startdate . $str));
            if(date('l',strtotime($next))!='Sunday'){
                array_push($date_list,array($next,date('l',strtotime($next))));
            }
        }
        var_dump($date_list);
        $d=$this->Extra_work->tna();
    }
    function display_table($tbl=null){
        if($tbl=null){
            redirect('Tna/enter_detailcc');
        }
        var_dump($tbl);
        //echo $this->table->generate($tbl);
    }
    
   function enter_detail(){
       if($this->input->post()){
           $dateA=$this->input->post('dateA');
           $dateZ=$this->input->post('dateB');
           $dateY=$this->input->post('dateC');
           $db=$this->Extra_work->tna();
           $final=array();
           foreach($db as $k=>$v){
               $str=" + $v->endday days";
               if($v->startday=='A'){
                   $startdate=$dateA;
               }elseif($v->startday=='Z'){
                    $startdate=$dateZ;
               }elseif($v->startday=='Y'){
                   $startdate=$dateY;
               }
               
               $next= date('Y-m-d',strtotime($startdate . $str));
               if(date('l',strtotime($startdate . $str))!='Sunday'){
                   $next= date('Y-m-d',strtotime($startdate . $str));
               }else{
                   $x=$v->endday;
                   $x=$x-1;
                   
                    $str=" + $x days";
                    $next= date('Y-m-d',strtotime($startdate . $str));
               }
               $f=array('id'=>$v->id,'name'=>$v->name,'fixed_date'=>$next,'Day'=>date('l',strtotime($startdate . $str)));
               array_push($final,$f);
           }
           $d['json']=json_encode($final);
           //$this->display_table($final);
          $this->load->view('tna/display_tna',$d);
       }
       else{
           $this->load->view('tna/user_input');
       } 
   }
    
}