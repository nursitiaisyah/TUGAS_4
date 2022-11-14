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

</style>
</head>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA JURUSAN</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>JURUSAN</center></h3>
			<?php
			include "koneksi.php";

			$qry_jurusan=mysqli_query($koneksi, "select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jurusan['nama_jurusan']?></td>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>





