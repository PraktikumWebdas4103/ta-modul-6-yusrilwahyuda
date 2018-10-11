<?php  
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$query = "SELECT `password`, `foto` FROM `pengguna` WHERE id='$id'";
	$result = mysqli_query($conn,$query);
	$data = mysqli_fetch_array($result);

	$nama 					= $_POST['nama'];
	$username 				= $_POST['username'];
	$password 				= empty($_POST['password']) ? $data['password'] : $_POST['password'];
	$konfirmasi_password 	= $_POST['password2'];
	$tanggal_lahir 			= $_POST['ttl'];
	$jenis_kelamin 			= $_POST['jenisk'];
	$foto 					= $_FILES['foto'];
	if(isset($_FILES['foto'])){
		$file_name = $foto['name'];
		$file_moved = move_uploaded_file($foto['tmp_name'], "terkirim/".$foto['name']);
	} else {
		$file_name = $data['foto'];
	}
	echo $data['foto'];

}
?>