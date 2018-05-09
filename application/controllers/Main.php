<?php 

class Main extends CI_Controller {

	public function index()
	{
		//I'm just using rand() function for data example
		$temp = rand(10000, 99999);
                $code="00123";
                $this->set_barcode($code);
		//$this->set_barcode($temp);
	}
	
        
        function test($d=null){
            $data=file_get_contents(site_url('Main/set_barcode/').$d);
            file_put_contents('assets/barcode/'.$d.'.jpg', $data);
            echo "<img src=".site_url('assets/barcode/'.$d.'.jpg')." >";
        }
        
        
    public function set_barcode($code) {
    //load library
    $this->load->library('Zend');
    //load in folder Zend
    //$this->zend->load('Zend/Barcode');
    //generate barcode
    Zend_Barcode::render('Code128', 'image', array('text'=>$code), array());
}
}