<?php 

/*
| Library digunakan agar tidak menuliskan syntax berulang-ulang
| Library digunakan agar memudahkan untuk memanggil function
*/

class Library{
 
	function nama_saya(){
		echo "Nama saya adalah malasngoding !";
	}
 
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}