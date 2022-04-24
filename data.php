<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data</title>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;"> Data</h1>
		<a href="form_data.php" button type = "button" class ="btn btn-dark"> + Tambah data </a>
		<table class="table table-striped table-hover mt-3">
				<tr style="text-align : center;">
					<td>Id 145</td>
					<td>Nama 145</td>
					<td>Email 145</td>
					<td>Action</td>
				</tr>
			<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM tbl_145";
			$hasil = mysqli_query($koneksi, $sql);
			while  ($row = mysqli_fetch_array($hasil)) {
			?>
			<td><?=$row['id_145'];?></td>
			<td><?=$row['nama_145'];?></td>
			<td><?=$row['email_145'];?></td>
			<td>
				<div class="row">
					<div class="col d-flex justify-content-center">
						<a href="form_edit.php?id=<?=$row['id_145'] ?>" button type="button" class="btn btn-outline-primary"> Edit </a> 
					</div>
					<div class="col d-flex justify-content-center">
						<a href="delete.php?id=<?=$row['id_145'] ?>" button type="button" class="btn btn-outline-danger"> Delete </a>
				</div>
			</div>
			</td>
		<?php 	}
		?>
		</table>
	</div>
</body>
</html>