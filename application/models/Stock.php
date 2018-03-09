<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 */


class Stock extends CI_Model{
    function __construct(){
	parent::__construct();
	ini_set('date.timezone', 'UTC');
    }
    
}