<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Come extends CI_Controller {
    
    
	function __construct(){
		parent::__construct();	

	}
        
        // Berfungsi untuk mengaktifkan helper, yaitu helper html
        // atau bisa mengaktifkannya melalui autoload
		$this->load->helper('html');
	}
 
	public function index(){
		$this->load->view('view_come');
	}
	
}