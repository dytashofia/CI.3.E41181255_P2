<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>

	<!-- untuk menampilkan apabila eror atau kesalahan memanggil metod -->
	<?php echo validation_errors(); ?>

    <!-- Berfungsi untuk menetapkan dari form ke method aksi -->
	<?php echo form_open('form_validation/aksi'); ?>
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>