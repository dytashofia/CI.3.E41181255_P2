<?php
/*
| Controller meruoakan sebuah pengontrol atau pengatur
| yaitu pengatur aksi dari sebuah aplikasi, 
| ex. mengatur view yang akan dipanggil, meamnggil helper, memanggil construct dan lain-lain
*/

/*
| Merupakan class Overview
| Penamaan harus diawali dengan huruf besar dan harus sama dengan file yang dibuat pada controller
*/

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

    // Fungsi index
	public function index()
	{
        // Fungsi dari load->view adalah memanggil file overview)
        $this->load->view("admin/Overview");
	}
}