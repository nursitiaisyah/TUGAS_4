<?php
include "koneksi.php";

$qry_get_dosen=mysqli_query($koneksi,"select * from dosen where id_dosen = '".$_GET['id_dosen']."'");
$data_dosen=mysqli_fetch_array($qry_get_dosen);
?>
<h3>Ubah Dosen</h3>
<form action="proses_editdosen.php" method="post">
	<input type="hidden" name="id_dosen" value="<?=$data_dosen['id_dosen']?>">
	Nama :
	<input type="text" name="nama_dosen" value="<?=$data_dosen['nama_dosen']?>" class = "form-control">
	Alamat :
	<input type="text" name="alamat" value="<?=$data_dosen['alamat']?>" class = "form-control">
	Telepon :
	<input type="text" name="telepon" value="<?=$data_dosen['telepon']?>" class = "form-control">
	<br>
	<input type="submit" name="simpan" value="Ubah Dosen" class="btn btn-primary">
</form>