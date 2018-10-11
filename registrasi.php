<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<br>
		<center>
			<marquee><h3>SELAMAT DATANG</h3></marquee>
		<table>
		<form action="prosesRegistrasi.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td>
					<input type="password" name="password2">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="ttl">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jenisk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jenisk" value="Perempuan">Perempuan
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