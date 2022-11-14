<?php
if($_POST){
	$id_dosen=$_POST['id_dosen'];
	$nama_dosen=$_POST['nama_dosen'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];

	if(empty($nama_dosen)){
		echo "<script>alert('nama dosen tidak boleh kosong');location.href=edit_dosen.php';</script>";

	}else if(empty($alamat)){
		echo "<script>alert('alamat dosen tidak boleh kosong');location.href=edit_dosen.php';</script>";

	}else if(empty($telepon)){
		echo "<script>alert('telepon dosen tidak boleh kosong');location.href=edit_dosen.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update dosen set nama_dosen='".$nama_dosen."', alamat='".$alamat."', telepon='".$telepon."' where id_dosen = '".$id_dosen."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update dosen');location.href='datadosen.php';</script>";

		} else {
			echo "<script>alert('Gagal update dosen');location.href='datadosen.php?id_dosen=".$id_dosen."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update dosen set nama_dosen='".$nama_dosen."', alamat='".$alamat."', telepon='".$telepon."' where id_dosen = '".$id_dosen."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update dosen');location.href='datadosen.php';</script>";

			}else{
				echo "<script>alert('Gagal update dosen');location.href='datadosen.php';</script>";
			}
		}
	}
}
?>