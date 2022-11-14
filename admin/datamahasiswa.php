<?php
include "navbar.php";

session_start();

//cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
<style>
	h3{
		margin-top: 20px;
	}
	.tambah{
		padding-left: 10px;
	}
</style>		
</head>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>DATA MAHASISWA</center></h3>
			<div class="tambah">
			<a href="tambah_mahasiswa.php" class="btn btn-primary mb-1"> + Tambah</a>
		</div>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><?=$data_mahasiswa['password']?></td>
				<td><?=$data_mahasiswa['nama_jurusan']?></td>

				<td><a href="edit_mhs.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> |

				<a href="delete.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">
				<i class="fa fa-trash" aria-hidden="true"></i></a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

