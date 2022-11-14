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
				<th>NAMA MATA KULIAH</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>MATA KULIAH</center></h3>
			<div class="tambah">
			<a href="tambah_matkul.php" class="btn btn-primary mb-1"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
			</div>
			<?php
			include "koneksi.php";

			$qry_matakuliah=mysqli_query($koneksi, "select * from matakuliah");
			$no=0;
			while ($data_matakuliah=mysqli_fetch_array($qry_matakuliah)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_matakuliah['nama_matkul']?></td>
				

				<td><a href="edit_matkul.php?id_matkul=<?=$data_matakuliah['id_matkul']?>"class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |	
				<a href="delete_matkul.php?id_matkul=<?=$data_matakuliah['id_matkul']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>




