<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * -- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;

DROP TABLE `SampleDb`.`packing_operation`;


DROP TABLE `SampleDb`.`sewing_operation`;


DROP TABLE `SampleDb`.`cutting_operation`;


DROP TABLE `SampleDb`.`oreder_require`;


DROP TABLE `SampleDb`.`order`;


DROP TABLE `SampleDb`.`sewing_reject`;


DROP TABLE `SampleDb`.`cutting_reject`;


DROP TABLE `SampleDb`.`suppler`;



-- ************************************** `SampleDb`.`sewing_reject`

CREATE TABLE `SampleDb`.`sewing_reject`
(
 `int`      INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`int`)
);





-- ************************************** `SampleDb`.`cutting_reject`

CREATE TABLE `SampleDb`.`cutting_reject`
(
 `id`       INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`)
);





-- ************************************** `SampleDb`.`suppler`

CREATE TABLE `SampleDb`.`suppler`
(
 `id`   INT NOT NULL ,
 `name` VARCHAR(45) NOT NULL ,

PRIMARY KEY (`id`)
);





-- ************************************** `SampleDb`.`order`

CREATE TABLE `SampleDb`.`order`
(
 `id`         INT NOT NULL ,
 `name`       VARCHAR(45) NOT NULL ,
 `size`       VARCHAR(5) NOT NULL ,
 `color`      VARCHAR(10) NOT NULL ,
 `Quantity`   INT NOT NULL ,
 `suppler_id` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_111` (`suppler_id`),
CONSTRAINT `FK_111` FOREIGN KEY `fkIdx_111` (`suppler_id`) REFERENCES `SampleDb`.`suppler` (`id`)
);





-- ************************************** `SampleDb`.`packing_operation`

CREATE TABLE `SampleDb`.`packing_operation`
(
 `id`        NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_154` (`order_id`),
CONSTRAINT `FK_154` FOREIGN KEY `fkIdx_154` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`sewing_operation`

CREATE TABLE `SampleDb`.`sewing_operation`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_176` (`order_id`),
CONSTRAINT `FK_176` FOREIGN KEY `fkIdx_176` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`cutting_operation`

CREATE TABLE `SampleDb`.`cutting_operation`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `date`     DATETIME NOT NULL ,
 `Quantity` INT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_172` (`order_id`),
CONSTRAINT `FK_172` FOREIGN KEY `fkIdx_172` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





-- ************************************** `SampleDb`.`oreder_require`

CREATE TABLE `SampleDb`.`oreder_require`
(
 `id`       INT NOT NULL ,
 `order_id` INT NOT NULL ,
 `name`     VARCHAR(45) NOT NULL ,
 `Quantity` DECIMAL NOT NULL ,
 `QM`       VARCHAR(45) NOT NULL COMMENT 'Quantity Masurmant i.e KG,MTR' ,
 `Price`    DECIMAL ,

PRIMARY KEY (`id`),
KEY `fkIdx_124` (`order_id`),
CONSTRAINT `FK_124` FOREIGN KEY `fkIdx_124` (`order_id`) REFERENCES `SampleDb`.`order` (`id`)
);





 
 */

/*
 * SELECT `order`.`id`,`order`.`number`,`order`.`color`,`order`.`size`,`order`.`quantity`,sum(`order_processed`.`quantity`) as `completed`,`order`.`datetime` ,`order`.`quantity`- sum(`order_processed`.`quantity`)as 'remail' FROM `order` join `order_processed` on `order_processed`.`order_id`=`order`.`id` where `order_processed`.`operation_id` =1 group by `order_processed`.`order_id`
 */

class manager_model extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'Asia/Kolkata');
    }
    
    function get_style(){
        
    }
    
    function get_order($id,$op_id=null){
        $res=$this->db->get_where('order',array('number'=>$id));
        return $res->result();
        //$this->db->select(array(''));
    }
    
    function explore_report($order_id,$operation_id){
        $this->db->select(array('order_processed.quantity','order_processed.datetime'));
        return $this->db->get_where('order_processed',array('order_id'=>$order_id,'operation_id'=>$operation_id));
    }
    
    function explore_order($order_id,$operationid=null){
        if($operationid==null){$operationid=1;}
        $q='select `order`.`id` AS `id`,
`order`.`number` AS `number`,
`order`.`color` AS `color`,
`order`.`size` AS `size`,
`order`.`quantity` AS `Total Order`,
sum(`order_processed`.`quantity`) AS `completed`,
`order`.`datetime` AS `datetime`,
(`order`.`quantity` - sum(`order_processed`.`quantity`)) AS `remain`
from (`order` join `order_processed` on((`order_processed`.`order_id` = `order`.`id`))) where (`order_processed`.`operation_id` = 1) group by `order_processed`.`order_id`';
    $this->db->select(array('order.id AS id','order.number AS number','order.color AS color','order.Size',
        'order.quantity AS TotalOrder','sum(order_processed.quantity) AS completed',
       '(order.quantity - sum(order_processed.quantity)) AS remain', 'order.datetime AS DATETIME'
        ));
    $this->db->from('order');
    $this->db->join('order_processed','order_processed.order_id = order.id');
    $this->db->group_by('order_processed.order_id');
    $this->db->where(array('order_processed.operation_id'=>$operationid,'order.number'=>$order_id));
    //echo "hi";
    return $this->db->get();
    
    //var_dump($d->result());
//$this->db->get_where('');
    }
   
     function list_order(){
        $this->db->select(array('count(*) as number_Of_Color','number','datetime'));
        $this->db->group_by(array('number'));
        //$this->db->order_by('id','desc');
        $gt= $this->db->get('order');
        $gt=$gt->result();
        return json_encode($gt);
    }
    
    function add_buyer($d){
        //replace INTO `test`.`buyer` (`name`, `date`) VALUES ('Bhartiye', CURRENT_TIMESTAMP);
        if($this->db->replace('buyer',$d)){
            return true;
        }
    }
    
    private function add_style($d){
        $this->db->insert('styles',$d);
           // return true;
        
    }
   function view_allorder(){
       $this->db->select('*')->from('order')->order_by("id", "desc");
       return $this->db->get();
   }
   
    function get_stylebyid($data){
        //var_dump($data);
        $this->db->select('id');
        $re=$this->db->get_where('styles',$data);
        $ret=$re->result();
        if($ret){
                return $ret[0];
        }
        else{
             $this->add_style($data);
             $this->get_stylebyid($data);
        }
    }
    function add_order($detail){
        $this->db->insert('order',$detail);
    }
    
    function json_prcess_sequence(){
        $this->db->select(array('id','name'));
        $this->db->from('process_sequence');
        $this->db->order_by("id", "asc");
        $b=$this->db->get();
        $by=$b->result();
       $label=array();
       $value=array();
        $v=array();
        foreach($by as $ky=>$val){
            //var_dump($val->name);
            $br=array('label'=>$val->name,'value'=>$val->id);
            array_push($label, 'label');
            array_push($value, 'value');
            array_push($v, $br);
        }
        $jf='';
        foreach($v as $value){
            $jf.=json_encode($value).',';
        }
       $jf=trim($jf,',');
        echo $jf; 
    }
    
    
    function json_Styles(){
        $this->db->select('name');
        $b=$this->db->get('styles');
        $by=$b->result();
       $label=array();
       $value=array();
        $v=array();
        foreach($by as $ky=>$val){
            //var_dump($val->name);
            $br=array('label'=>$val->name,'value'=>$val->name);
            array_push($label, 'label');
            array_push($value, 'value');
            array_push($v, $br);
        }
        $jf='';
        foreach($v as $value){
            $jf.=json_encode($value).',';
        }
       $jf=trim($jf,',');
        echo $jf; 
    }
    
    function json_buyer(){
        $this->db->select('name');
        $b=$this->db->get('buyer');
        $by=$b->result();
       $label=array();
       $value=array();
        $v=array();
        foreach($by as $ky=>$val){
            //var_dump($val->name);
            $br=array('label'=>$val->name,'value'=>$val->name);
            array_push($label, 'label');
            array_push($value, 'value');
            array_push($v, $br);
        }
        $jf='';
        foreach($v as $value){
            $jf.=json_encode($value).',';
        }
       $jf=trim($jf,',');
        echo $jf; 
    }
    
    
}