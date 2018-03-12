<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class Stock_model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'UTC');
    }
    function viewall(){
        $query='SELECT `stock_discription`.`id` , `stock_discription`.`discription` , `stock_discription`.`used_by` , `stock_type`.`item` from stock_discription join stock_type on `stock_discription`.`stock_id` = `stock_type`.`id`';
        return $this->db->query($query);
    }
    
    function get_stocktype(){
        return $this->db->get('stock_type');
    }
    function put_stock($data){
        //var_dump($data);
       if($this->db->insert('stock_discription',$data)){
           return true;
       }
       else{return false;}
    }
    
    
}