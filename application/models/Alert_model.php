<?php

class Alert_model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'Asia/Kolkata');
    }
    
   function get_today_task(){
       $r=$this->db->get_where('tna_task',array('fixed_date'=>date("Y-m-d")));
       return $r->result();
   }
   
    function get_departments(){
        $r=$this->db->get('department');
        return $r->result();
    }
    
    function get_mobiles($department_id){
        $r=$this->db->get_where('mobile',array('department_id'=>$department_id));
        return $r->result();
    }
   
    function quote($rand=null){
        $quote=array(
         'Set a goal that makes you want to jump out of bed in the morning',
         'When you start each day with a grateful heart',
         'Rise up, start fresh see the bright opportunity in each day',
         'Having a rough morning?',
         'Everyday may not be good, but there is something good in every day',  
     );
        return $quote[rand(0, sizeof($quote)-1)];
    }
    
    function get_taskRBD($days=null,$department_id=null){
        $reminderDate = date('Y-m-d', strtotime("+$days days"))."<br>"; 
        $this->db->where('fixed_date <=', $reminderDate);
        $this->db->where('department like', "%".$department_id.'%');
        $r=$this->db->get_where('tna_task',array('completed'=>0));
        return $r->result();
    }
    
    
   function getmobile_list(){
       $r=$this->db->get('mobile');
       return $r->result();
   }
   
   function pending_task(){
      // "SELECT * FROM `tna_task` WHERE `fixed_date`< "2018-04-27" and `completed` = 0"
       $this->db->where('fixed_date < ',date("Y-m-d"));
       $r=$this->db->get_where('tna_task',array('completed'=>0));
       return $r->result();
   }
   
   function alert_log($dbs){
       $message=array('message'=>$dbs);
       $this->db->insert('mobile_log',$message);
   }
    
}