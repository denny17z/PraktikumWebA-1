<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<link rel="stylesheet" type="text/css" href="custom.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<body>
	<h1>Form Inputan</h1>
	<form action="insert.php" method="POST">
	<div class="tabel">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nim" placeholder="NIM"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nama" placeholder="Nama Lengkap"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="masukan" name="alamat" placeholder="Masukan Alamat"></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="telp" placeholder="No. Telp."></input></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<select class="selek" name="status">
						<option value="Aktif">Aktif</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn-tambah" name="kirim">Input</button></td>
			</tr>
			<tr>
				<td><a href="view.php">Lihat daftar data disini !</a></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>
