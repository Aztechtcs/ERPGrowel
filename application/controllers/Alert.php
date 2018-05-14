<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Alert
	 *	- or -
	 * 		http://example.com/index.php/Alert
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
            //$this->load->model(array('work','Extra_work','manager_model','Tna_model','Alert_model'));
            $this->load->model(array('Alert_model'));
            //$this->load->helper(array('text','form'));
            //$this->load->library(array('form_validation','table'));
            //$this->load->library('My_PHPMailer');
            //$this->session;     
            //$this->load->view('tna/TNA_header');
    }
    
  function sent_message($message,$phone){
    $authkey='212278AQBrPfyBwO5ae077e7';
    $url="http://api.msg91.com/api/sendhttp.php?sender=GROWEL&route=4&mobiles=$phone&authkey=212278AQBrPfyBwO5ae077e7&country=0&message=$message";
    $curl = curl_init();
    curl_setopt_array($curl, array(
    //CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey=$authkey&message=$message&sender=Nasir&mobile=$phone",
    CURLOPT_URL =>$url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return 'Success- '.$response;
}

    //$r=file_get_contents($url);
   // return $r;
   }
   
 function index(){//
    //echo $this->sent_message('hiiii 4nd test', 9716942965);
 }   
 
 function tl($days,$dep_id){
      $task_list=$this->Alert_model->get_taskRBD($days,$dep_id); 
      $json=array();
      foreach($task_list as $v){
          array_push($json,array('id'=>$v->id,'name'=>$v->name,'fixed_date'=>$v->fixed_date,'Order_Number'=>$v->Order_Number));
      }
      $db['json']=$json;
      $this->load->view('tna/pending_task',$db);
 }
 
 function reminder_byid($id=null){
     $depart=$this->Alert_model->get_departments();
     foreach($depart as $v){
         $mobiles=$this->Alert_model->get_mobiles($v->id);
         $task_list=$this->Alert_model->get_taskRBD($v->rbd,$v->id); /*REMINDER BEFORE DAYS*/
         //var_dump($task_list);
         foreach($mobiles as $monlst){
             if(sizeof($task_list)==0){
               $message= 'Hi '.$monlst->name.' Good Morning '.$this->Alert_model->quote();
             }else{
               $message='Hi '.$monlst->name.', '. sizeof($task_list).' Pending Work for you Click '.site_url('Alert/tl/').$v->rbd.'/'.$v->id.' ';
            $r="testdemo";
            //$r=$this->sent_message($message,$monlst->phone);
            $M='{"'.$r.'"},{"'.$monlst->phone.'"},{"'.$message.'"}';
            $this->Alert_model->alert_log($M);
            echo $monlst->phone.$message;   
             }
         }
        // var_dump($v);
        //var_dump($mobiles);
        //var_dump($task_list);   
     }
        //var_dump($depart);
 }
 
 
 function reminder(){
     $mobile=$this->get_mobile();
     $today_task=$this->get_today_task();
    // var_dump($today_task);
     $message='Today Tasks _';
     foreach($today_task as $v){
        $message.=' | '.$v->Order_Number;
        $message.=' / '.$v->name;
        //$message.="\t\n";
     }
    // echo $message;
     foreach($mobile as $mob){
         //$r=$this->sent_message($message,$mob->phone);
         $r='test';
         $M='{'.$r.'},{'.$mob->phone.'},{'.$message.'}';
         $this->Alert_model->alert_log($M);
     }
 }
 
 function testing_cron(){
    $mobile=$this->get_mobile();
    $r=$this->Alert_model->pending_task();
    $message= "Total Pending Task ".sizeof($r);
    $message.=' Click for Detail '.site_url('Alert/pending_task');
     foreach($mobile as $mob){
         $r="test123";
         //$r=$this->sent_message($message,$mob->phone);
         $M='{'.$r.'},{'.$mob->phone.'},{'.$message.'}';
         $this->Alert_model->alert_log($M);
     }
 }
 
 function reminder_pending(){
    $mobile=$this->get_mobile();
    $r=$this->Alert_model->pending_task();
    $message= "Warning: You might Face difficulty Because of Delay Task ".sizeof($r);
    $message.=' click for detail '.site_url('Alert/pending_task');
    if(sizeof($r)<1){
        $message="Evening is a time of real experimentation, you never want to look the same way. Good Evening. ...";
    }
    //$message="SORRY Please Ignore the above message Logical mistake . ";
    
    foreach($mobile as $mob){
        // $r=$this->sent_message($message,$mob->phone);
        $r="test";
         $M='{'.$r.'},{'.$mob->phone.'},{'.$message.'}';
         $this->Alert_model->alert_log($M);
    }
 }
 
 function pending_task(){
     $r=$this->Alert_model->pending_task();
     $message= "Warning: Hi You might Face difficulty Because of Delay Task  ".sizeof($r);
     $message.='Click for Detail '.site_url('Alert/pending_task');
     $re['json']=$r;
     $this->load->view('tna/pending_task',$re);
     //var_dump($r);
 }
 
 
 private function get_mobile(){
     return $this->Alert_model->getmobile_list();
 }
 
 private function get_today_task(){
    return $this->Alert_model->get_today_task();
 }

 
} 