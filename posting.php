<?php 
include_once("koneksi.php");
session_start();
$id = $_SESSION['id'];
$nama =$_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<br>
	<center>
	<a href="semuaposting.php">Semua Postingan</a><br>
	<a href="daftarposting.php">Postingan Saya</a>

	<table>
		<form action="proses_posting.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td>Judul</td>
				<td>
					<input type="text" name="judul">
				</td>
			</tr>
			<tr>
				<td>Cerita</td>
				<td>
					<textarea name="cerita" rows="40" cols="100"></textarea>
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>
					<input type="file" name="foto">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>