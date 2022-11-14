<?php
include "koneksi.php";

$qry_get_matakuliah=mysqli_query($koneksi,"select * from matakuliah where id_matkul = '".$_GET['id_matkul']."'");
$nama_matkul=mysqli_fetch_array($qry_get_matakuliah);
?>
<h3>Ubah Mata Kuliah</h3>
<form action="proses_editmatkul.php" method="post">
	<input type="hidden" name="id_matkul" value="<?=$nama_matkul['id_matkul']?>">
	Nama Mata Kuliah :
	<input type="text" name="nama_matkul" value="<?=$nama_matkul['nama_matkul']?>" class = "form-control">
	
	<input type="submit" name="simpan" value="Ubah Mata Kuliah" class="btn btn-primary">
</form>