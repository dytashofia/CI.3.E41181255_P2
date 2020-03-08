<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Hubungdatabase extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_model');
	}
 
	function user(){

        // memanggil function ambil_data pada model
        $data['user'] = $this->m_model->ambil_data()->result();
        
        // menampilkan view user 
		$this->load->view('view_user.php',$data);
	}
 
}