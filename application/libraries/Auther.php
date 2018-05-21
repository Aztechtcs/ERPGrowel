<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auther {
	public function __construct($class = NULL){
            $this->load->database('test');
            $this->load->model('work');
            $this->session;  
               // $this->load();
	}

	public function load($class){
		require_once(string) $class.'.php'; //fixed CI 3 issue by lilsammy
		log_message('debug', "Zend Class $class Loaded");
	}
        
       function sessionpass(){
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
}