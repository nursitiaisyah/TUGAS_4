<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and  password='$password'");

//menghitung jumlah data yang ditemukan pada database
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//cek jika user login sebagai admin
	if($data['level']=="admin"){

		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		//alihkan kehalaman dashboard admin
		header("location:admin/beranda.php");


	//cek jika user login sebagai pegawai
	}else if($data['level']=="petugas"){

		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";

		//alihkan kehalaman dashboard petugas
		header("location:petugas/beranda.php");
	}
}else{
	header("location:index.php?pesan=gagal");
}
?>
