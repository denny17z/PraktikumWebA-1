<?php 
	session_start();
	if(isset($_POST['ubah'])){

		include ('konek.php');

		$idEdit=$_POST['id'];
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$jk=$_POST['jk'];
		$ttl=htmlentities($_POST['ttl']);
		$alamat=$_POST['alamat'];
		$telp=$_POST['telp'];

		$koneksi->query("UPDATE tb_biodata SET NIM='".$nim."', Nama='".$nama."', Jenis_kelamin='".$jk."', Tanggal_lahir='".$ttl."', Alamat='".$alamat."', No_telepon='".$telp."' WHERE NIM = ".$idEdit);
	}
	header("location:view.php");
	exit();
 ?>