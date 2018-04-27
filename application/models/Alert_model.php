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
   
   function getmobile_list(){
       $r=$this->db->get('mobile');
       return $r->result();
   }
   
   function pending_task(){
      // "SELECT * FROM `tna_task` WHERE `fixed_date`< "2018-04-27" and `completed` = 0"
       $this->db->where('fixed_date <',date("Y-m-d"));
       $r=$this->db->get_where('tna_task',array('completed'=>0));
       return $r->result();
   }
   
   function alert_log($dbs){
       $message=array('message'=>$dbs);
       $this->db->insert('mobile_log',$message);
   }
    
}