<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        
        //berguna untuk mengaktifkan helper download
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('view_download');
    }
    
    // Penentuan tempat file yang akan di download 
	public function lakukan_download(){				
		force_download('Picture/bg.jpg',NULL);
	}	
 
}