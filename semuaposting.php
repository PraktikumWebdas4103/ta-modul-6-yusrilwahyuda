<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<center>SEMUA POSTINGAN
		<br>
		<br>
	<table border="1" align="center">
		<tr>
			<th width="200">Judul</th>
			<th width="500">Cerita</th>
			<th>ID User</th>
			<th>Tanggal</th>
			<th>Foto</th>
		</tr>
		<?php 
		$query = "
				SELECT `id`,`judul`,`cerita`,`nama` AS 'nama',`tanggal`,`postingan`.`foto`
				FROM `posting`
				JOIN USER ON `posting`.`id_user` = `pengguna`.`id`";
		$result= mysqli_query($conn,$query);
		while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td align="center">
				<?php
				echo $data['judul'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['cerita'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['nama'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['tanggal'];
				?>
			</td>
			<td align="center">
				<?php
				echo "<img src='terkirim/".$data['foto']."' width='250'>";
				?>
			</td>
			<td>Aksi</td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>