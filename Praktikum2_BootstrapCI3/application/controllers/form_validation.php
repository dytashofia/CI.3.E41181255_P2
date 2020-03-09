<?php 

class Form_validation extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	//memanggil data pada view form validation untuk ditampilkan
	function index(){
		$this->load->view('view_form_validation');
	}

	//sebagai aksi validasi ketika data telah diinputkan
	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		// Pengecekan untuk validasi
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('view_form_validation');
		}
	}
}
