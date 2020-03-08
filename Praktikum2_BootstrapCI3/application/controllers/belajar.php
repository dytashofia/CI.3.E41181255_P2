<?php

// berfungsi untuk mencegah akses langsung pada controller
defined('BASEPATH') OR exit('No direct script access allowed');

// berfungsi untuk meng-extends controller baru dengan CI_Controller
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
	}
 
/*
| Terdapat dua method, yaitu method index dan method halo
| hal tersebut merupakan contoh membuat controller pada codeigniter
*/    
	public function index(){
		echo "ini method index pada controller belajar";
	}

    
    /* 
    | Fungsi dari this->load->view adalah untuk menampilkan view 
    | pada method hallo view berfungsi untuk menampilkan view belajar
    */

	public function halo(){
	    $this->load->view('view_belajar');
	}
 
}