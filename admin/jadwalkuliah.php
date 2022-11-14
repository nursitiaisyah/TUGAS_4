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
				<th>HARI</th>
				<th>JAM</th>
				<th>MATA KULIAH</th>
				<th>NAMA DOSEN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>JADWAL KULIAH</center></h3>
			<div class="tambah">
			<a href="tambah_jadwalkuliah.php" class="btn btn-primary mb-1"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
			</div>
			<?php
			include "koneksi.php";
			$qry_jadwalkuliah=mysqli_query($koneksi, "select * from jadwalkuliah join matakuliah on matakuliah.id_matkul=jadwalkuliah.id_matkul join dosen on dosen.id_dosen=jadwalkuliah.id_dosen");
			$no=0;
			while ($data_jadwalkuliah=mysqli_fetch_array($qry_jadwalkuliah)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jadwalkuliah['hari']?></td>
				<td><?=$data_jadwalkuliah['jam']?></td>
				<td><?=$data_jadwalkuliah['nama_matkul']?></td>
				<td><?=$data_jadwalkuliah['nama_dosen']?></td>

				<td><a href="edit_jadwal.php?id_jadwa=<?=$data_jadwalkuliah['id_jadwal']?>"class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
				<a href="delete_jadwal.php?id_jadwal=<?=$data_jadwalkuliah['id_jadwal']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>




