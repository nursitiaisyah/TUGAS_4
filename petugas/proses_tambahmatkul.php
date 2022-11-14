<?php 
if($_POST){
	$nama_matkul=$_POST['nama_matkul'];

	if(empty($nama_matkul)){
		echo "<script>alert('nama mata kuliah tidak boleh kosong');location.href='tambah_matakuliah.php';</script>";	
	}else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into matakuliah (nama_matkul) value ('".$nama_matkul."')") or die(mysqli_error($koneksi));
		if($insert){
			echo "<script>alert('Sukses menambahkan mata kuliah');location.href='matakuliah.php';</script>";

		}else {
			echo "<script>alert('Gagal menambahkan mata kuliah');location.href='tambah_matakuliah.php';</script>";
		}
	}
}
?>