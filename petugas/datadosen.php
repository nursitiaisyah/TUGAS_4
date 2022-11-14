<?php
include "navbar.php";

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
				<th>ALAMAT</th>
				<th>TELEPON</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>DATA DOSEN</center></h3>
			<div class="tambah">
			<a href="tambah_dosen.php" class="btn btn-primary mb-1"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
		</div>

			<?php
			include "koneksi.php";

			$qry_dosen=mysqli_query($koneksi, "select * from dosen");
			$no=0;
			while ($data_dosen=mysqli_fetch_array($qry_dosen)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_dosen['nama_dosen']?></td>
				<td><?=$data_dosen['alamat']?></td>
				<td><?=$data_dosen['telepon']?></td>

				<td><a href="edit_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |	
				<a href="delete_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>
