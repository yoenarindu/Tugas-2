<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<div class="container" align="center">
	<?php 
	include "koneksi.php";
	$id = $_POST['id_145'];
	$nama = $_POST['nama_145'];
	$email = $_POST['email_145'];

	$sql = "UPDATE tbl_145 SET nama_145 = '$nama', email_145='$email' WHERE id_145='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil){ ?>
		<h2>Eksekusi tidak berhasil</h2>
		<?php }
		else { ?>
			<h2 class="mt-3"> Data Berhasil DiUpdate<br></h2>
			<a href="data.php" button type="button" class="btn btn-succes mt-3">Lihat Daftar Jadwal</a>
			<?php }
			?>
	 
	</div>

</body>
</html>