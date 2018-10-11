<?php
include_once 'koneksi.php';
session_start();
$id = $_SESSION['id'];
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>Postingannya <?php echo $nama; ?></center>
	<table border="1" align="center">
		<tr>
			<th>Judul</th>
			<th>Cerita</th>
			<th>ID User</th>
			<th>Tanggal</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$query = "
				SELECT `id`,`judul`,`cerita`,`user`.`nama` AS 'nama',`tanggal`,`postingan`.`foto`
				FROM
				    `posting`
				JOIN USER ON `posting`.`id` = `user`.`id`
				WHERE `posting`.`id` = '$id'
				";
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
				echo "<img src='terkirim/".$data['foto']."' width='200'>";
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