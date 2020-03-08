<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {

    /*
    | Berguna untuk memanggil syntax yang ada pada library
    */ 

	function index(){
		$this->load->library('library');
		$this->library->nama_saya();
                echo "<br/>";
                $this->library->nama_kamu("Dyta");
	}
 
}