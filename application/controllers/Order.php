<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Order
	 *	- or -
	 * 		http://example.com/index.php/Order
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
            //$this->load->model(array('work','Extra_work','manager_model'));
            $this->load->helper(array('text','form'));
            $this->load->library(array('form_validation','table'));
            $this->session;    
            $this->load->view('tna/TNA_header');
            $this->load->library('email');
        //SMTP & mail configuration
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'us2.smtp.mailhostbox.com.',
            'smtp_port' => 587,
            'smtp_crypto'=>'tls', 
            'smtp_user' => 'nasir@growelimpex.com',
            'smtp_pass' => '$XYPP^Jr4',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->reply_to('nasir@programmer.net', 'Nasiruddin');
    }
    
    function mailsent($html=null){
        
        $to=array('ph9716942965@gmail.com');
       
        foreach($to as $v){
            
                     $htmlContent = '<h1>NEW ORDER insert detail</h1>';
            if($html!=null){
                $htmlContent.=$html;
            }else{
                $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';
            }
        $this->email->to($v);
        $this->email->from('nasir@growelimpex.com','Growel Impex');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);
        //Send email
        $this->email->send();
        echo $this->email->print_debugger().'<br>';
            }
         
        
        //Email content
       /* $htmlContent = '<h1>Sending email via SMTP server</h1>';
        $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

        $this->email->to('ph9716942965@gmail.com');
        $this->email->from('nasir@growelimpex.com','Growel Impex');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);
        //Send email
        $this->email->send();
        echo $this->email->print_debugger();*/
    }
    
    function index(){
        redirect('Order/put_detail');
    }
    
    function put_detail(){
        $this->load->model(array('manager_model','Tna_model','Extra_work'));
       /* if($this->input->post('get_template')){
            $Content = "Name,address,mobileno,email\n";
            $FileName = "Myfile-".date("d-m-y-h:i:s").".csv";
            header('Content-Type: application/csv'); 
            header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
            echo $Content;
            exit();}elseif($this->input->post('upload_template_data')){  }*/
        if($this->input->post('submit')){
            //$buyer_name=$this->input->post('buyer_name');
            $Style_id=$this->input->post('style_id');
            $html='';
            $this->input->post('price');
            $order_number=$this->input->post('order_number');
            $tna_time=$this->input->post('tna_time');
            $dateA=$this->input->post('dateA');
            
            $color=$this->input->post('color');
            $size=$this->input->post('size');
            $quantity=$this->input->post('quantity');
            $c=0;
            $this->table->set_heading('number', 'Color', 'Size','quantity','Style Number','Buyer Name');
            $table=array();
            while(sizeof($color)>$c){
                array_push($table, array($this->input->post('order_number') ,$color[$c] ,$size[$c],$quantity[$c],$Style_id,$this->input->post('buyer_name')));
                $this->manager_model->add_order(array('number'=>$this->input->post('order_number'),'color'=>$color[$c],'size'=>$size[$c],'quantity'=>$quantity[$c],'Style_id'=>$Style_id,'buyer_name'=>$this->input->post('buyer_name')));
                $c++;
            }
            $html.=$this->table->generate($table);
            $html.="<h1>TNA Download Link</h1>";
             
            if($tna_time==60){
               $db=$this->Extra_work->tna_60();
           }elseif($tna_time==90){
                $db=$this->Extra_work->tna();
           }elseif($tna_time==80){
                $db=$this->Extra_work->tna_80();
           }
           else{
               $db=$this->Extra_work->tna();
           }
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
               $f=array('id'=>null,'name'=>$v->name,'fixed_date'=>$next,'Day'=>date('l',strtotime($startdate . $str)),'Order_Number'=>$order_number,'department'=>$v->department);
               $this->Tna_model->add_task($f);
           }
           $html.='<br>'.site_url('Tna/download_tna/').$order_number;
           $this->mailsent($html);
           redirect('Tna/download_tna');
        }
        else{
            $this->load->view('order/put_detail');
        }
        
    }
}