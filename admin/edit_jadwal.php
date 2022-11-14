<?php
include "koneksi.php";
$qry_jadwalkuliah=mysqli_query($koneksi, "select * from jadwalkuliah join matakuliah on matakuliah.id_matkul=jadwalkuliah.id_matkul join dosen on dosen.id_dosen=jadwalkuliah.id_dosen");
$data_jadwalkuliah=mysqli_fetch_array($qry_jadwalkuliah);
?>
<h3>Ubah Jadwal Kuliah</h3>
<form action="proses_editjadwal.php" method="post">
	<input type="hidden" name="id_jadwal" value="<?=$data_jadwalkuliah['id_jadwal']?>">
	Hari :
	<input type="text" name="hari" value="<?=$data_jadwalkuliah['hari']?>" class = "form-control">
	Jam :
	<input type="text" name="jam" value="<?=$data_jadwalkuliah['jam']?>" class = "form-control">

	Mata Kuliah :
	<select name="id_matkul" value="<?= $data_matakuliah['id_matkul']?>" class="form-select from-control" aria-label=".form-select-sm example">
		<option>Pilih Mata Kuliah</option>
		<?php
		include "koneksi.php";
		$qry_matakuliah=mysqli_query($koneksi,"select * from matakuliah");
		while($data_matakuliah=mysqli_fetch_array($qry_matakuliah)){
			echo'<option value="'.$data_matakuliah['id_matkul'].'">'.$data_matakuliah ['nama_matkul'].'</option>';
		};
		?>
	</select>

	Nama Dosen :
	<select name="id_dosen" value="<?= $data_dosen['id_dosen']?>" class="form-select from-control" aria-label=".form-select-sm example">
		<option>Pilih Nama Dosen</option>
		<?php
		include "koneksi.php";
		$qry_dosen=mysqli_query($koneksi,"select * from dosen");
		while($data_dosen=mysqli_fetch_array($qry_dosen)){
			echo'<option value="'.$data_dosen['id_dosen'].'">'.$data_dosen ['nama_dosen'].'</option>';
		};
		?>
	</select>
	<br>
	<input type="submit" name="simpan" value="Ubah Dosen" class="btn btn-primary">
</form>