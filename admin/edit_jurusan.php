<?php
include "koneksi.php";
$qry_get_jurusan=mysqli_query($koneksi,"select * from jurusan where id_jurusan = '".$_GET['id_jurusan']."'");
$nama_jurusan=mysqli_fetch_array($qry_get_jurusan);
?>
<h3>Ubah Jurusan</h3>
<form action="proses_editjurusan.php" method="post">
	<input type="hidden" name="id_jurusan" value="<?=$nama_jurusan['id_jurusan']?>">
	Nama Jurusan :
	<input type="text" name="nama_jurusan" value="<?=$nama_jurusan['nama_jurusan']?>" class = "form-control">
	
	<input type="submit" name="simpan" value="Ubah Jurusan" class="btn btn-primary">
</form>