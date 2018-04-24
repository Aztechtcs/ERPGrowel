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
            $this->load->model(array('work','Extra_work','manager_model','Tna_model'));
            $this->load->helper(array('text','form'));
            $this->load->library(array('form_validation','table'));
            //$this->load->library('My_PHPMailer');
            $this->session;     
            $this->load->view('tna/Tna_header');
    }
    
    function dashboard(){
        $this->load->view('tna/TNA_dashboard');
    }
    
    function get_completedtask(){
        $d=$this->Tna_model->get_allby(1);
        $db['json']= json_encode($d->result());
        $this->load->view('tna/TNA_get_completedtask',$db);
    }
    
    function click_complete($id){
        $dbs['id']=$id;
        if($_REQUEST){
            $update['completed']='1';
            $update['comments']=$this->input->post('comments');
            $t=time();
            $update['finish_date']= date("Y-m-d",$t);
            $this->Tna_model->update_completeTask($update,$id);
            var_dump($_REQUEST);
        }
        $this->load->view('tna/TNA_completetask',$dbs);
    }
    
    function get_unclompltedtask(){
        $d=$this->Tna_model->get_allby(0);
        $db['json']= json_encode($d->result());
        $this->load->view('tna/TNA_task_list',$db);
    }
    
    function total_task(){
        $d=$this->Tna_model->get_all();
        $db['json']= json_encode($d->result());
        //var_dump($db);
        //var_dump($d->result());
        $this->load->view('tna/TNA_task_list',$db);
    }
    
    public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.growelimpex.com";      // setting GMail as our SMTP server
        $mail->Port       = 25;                   // SMTP port to connect to GMail
        $mail->Username   = "archana@growelimpex.com";  // user email address
        $mail->Password   = "growel@123";            // password in GMail
        //$mail->SentFrom('archana@growelimpex.com', 'Archana');  //Who is sending the email
        //$mail->AddReplyTo("archana@growelimpex.com","Archana ");  //email address that receives the response
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML message";
        $mail->AltBody    = "Plain text message";
        $destino = "nasir@aztechtcs.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "Nasir");
 
        $mail->AddAttachment("images/phpmailer.gif");      // some attached files
        $mail->AddAttachment("images/phpmailer_mini.gif"); // as many as you want
        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        $this->load->view('sent_mail',$data);
    }

    function get_tna(){
       $d= $this->Tna_model->get_task('Kokaidi abc');
       var_dump($d->result());
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
        redirect('Tna/dashboard');
        //redirect('Tna/enter_detail');
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
           $order_number=$this->input->post('order_number');
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
                   $x=$x+1;
                    $str=" + $x days";
                    $next= date('Y-m-d',strtotime($startdate . $str));
               }
              // $f=array('id'=>$v->id,'name'=>$v->name,'fixed_date'=>$next,'Day'=>date('l',strtotime($startdate . $str)),'c'=>$order_number);
               $f=array('id'=>null,'name'=>$v->name,'fixed_date'=>$next,'Day'=>date('l',strtotime($startdate . $str)),'Order_Number'=>$order_number);
               $this->Tna_model->add_task($f);
               array_push($final,$f);
           }
           //var_dump($final);
           
           $d['json']=json_encode($final);
           //$this->display_table($final);
           
          $this->load->view('tna/display_tna',$d);
       }
       else{
           //$this->load->view('tna/user_input');
           $this->load->view('tna/TNA_input');
       } 
   }
    
}