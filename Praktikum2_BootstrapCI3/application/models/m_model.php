<?php

/*
| Model berfungsi untuk menghubungkan database dengan codeigniter
|
*/


class M_model extends CI_Model{
	function ambil_data(){

        // mengambil data dari tabel pada database
		return $this->db->get('user');
	}
}
