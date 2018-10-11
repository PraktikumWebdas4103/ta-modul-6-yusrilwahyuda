<?php  
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$nama 					= $_POST['nama'];
	$username 				= $_POST['username'];
	$password 				= $_POST['password'];
	$konfirmasi_password 	= $_POST['password2'];
	$tanggal_lahir 			= $_POST['ttl'];
	$jenis_kelamin 			= $_POST['jenisk'];
	$foto 					= $_FILES['foto'];
	$file_name 				= $foto['name'];

	if (md5($password)==md5($konfirmasi_password)) {
		$file_moved = move_uploaded_file($foto['tmp_name'], "foto/".$foto['name']);
		if ($file_moved) {
			$query = "INSERT INTO pengguna(username, password, nama,jenisk,ttl,foto) 
					  VALUES ('$username','".md5($password)."','$nama','$jenis_kelamin','$tanggal_lahir','$file_name')";
			$berhasil = mysqli_query($conn,$query);
			if ($berhasil) {
				header('location: login.php');
			}else{
				echo "gagal registrasi";
			}
		}
	}
}
?>