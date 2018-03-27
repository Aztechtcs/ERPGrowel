<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class Store_Model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'Asia/Kolkata');
    }
    
    function get_hint($filed){
        //var_dump($filed);
        $whr=$filed['field']." LIKE '%".$filed['search']."%'";
        $slt="distinct ". $filed['field'];
       $ret=$this->db->distinct()->select($filed['field'])->from('store_material')->where($whr)->get();
       return $ret->result();
    }
    
    function show_all_stock(){//IN Insert Stock Page view last five stock
        $q="SELECT * FROM `store_material` order by `id` desc limit 0,5";
        $result= $this->db->query($q);
        return $result;
    }
    
    function delete_rcecordbyid($id){
    $this->db->where('id', $id);
    $this->db->delete('store_material');
    }
    
    function get_flds(){ 
       $q="DESCRIBE `store_material`";
        $res= $this->db->query($q);
        return $res->result();
    }
    function get_colms($filds){
        $q ="select distinct $filds from `store_material`";
         $res= $this->db->query($q);
        return $res->result();
    }
    
    function search_color($sclr){
         $q="SELECT `work` FROM `work` WHERE `work` like '%".$sclr."%' limit 0,5";
       //$q= "SELECT * FROM `store_material` WHERE `color` like '%".$sclr."%'";
         $res= $this->db->query($q);
        return $res->result();
    }
    
    function search_name($srch){
        //return "abc";
        $q="SELECT `work` FROM `work` WHERE `work` like '%".$srch."%' limit 0,5";
        //$q= "SELECT * FROM `store_material` WHERE `name` like '%".$srch."%'";
       $res= $this->db->query($q);
        return $res->result();
       // $this->db->get_where('work',array());
    }
}