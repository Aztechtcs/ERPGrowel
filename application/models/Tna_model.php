<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */

class Tna_model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'Asia/Kolkata');
    }
    
    function csv($order_number){
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $query = $this->db->get_where('tna_task',array('Order_Number'=>$order_number));
        $delimiter = ",";
        $newline = "\r\n";
        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        force_download($order_number.'.csv', $data);
    }
    
    function get_order_list(){//Working
        $re=$this->db->query('SELECT distinct `Order_Number` FROM `tna_task` where `completed` =0');
        return json_encode($re->result());
    }
    
    function get_task_list($order_number){
        $re=$this->db->get_where('tna_task',array('Order_Number'=>$order_number));
        return json_encode($re->result());
    }
    
    /* function get_completed_order(){//Done
        $re=$this->db->query('SELECT distinct `Order_Number` FROM `tna_task` where `completed` =1');
        return json_encode($re->result());
    } */
    
    function get_last_commnets(){
        $q='SELECT `comments`,timestampdiff(hour, `finish_date`,now()) as `tm` FROM `tna_task` WHERE `completed`=1';
        //$this->db->select(array('comments','timestampdiff(hour, `finish_date`,now()) as `tm`'))->from->('tna_task')->where('completed=1');
        $r=$this->db->query($q);
        return json_encode($r->result());
        //$r=$this->db->get();
        
        }
    
    function add_task($task){
        $this->db->insert('tna_task',$task);
    }
    
    function update_completeTask($update,$id){
        $this->db->where('id', $id);
        $this->db->update('Tna_task',$update);
    }
    
    function total_tna($byid=null){
        $re=$this->db->get('tna_task');
        $re=$re->num_rows();
        return $re;
    }
    
    function total_uncomptna(){
        $re=$this->db->get_where('tna_task',array('completed'=>0));
        $re=$re->num_rows();
        return $re;
    }
    
    function total_comptna(){
        $re=$this->db->get_where('tna_task',array('completed'=>1));
        $re=$re->num_rows();
        return $re;
    }
    
    function get_all(){
         $this->db->order_by("fixed_date", "asc");
         $r= $this->db->get('tna_task');
   return $r;
    }
    
    function get_allby($com=null){
        $r= $this->db->get_where('tna_task',array('completed'=>$com));
        return $r;
    }
function get_task($Order_Number=null){
    $this->db->order_by("fixed_date", "asc");
   $r= $this->db->get_where('tna_task',array('Order_Number'=>$Order_Number));
   return $r;
}
}