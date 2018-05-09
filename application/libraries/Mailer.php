<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer {

	public function __construct($class = NULL){
            parent::__construct();
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

}