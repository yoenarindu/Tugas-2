<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Action</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$nama = $_POST['nama_145'];
	$email = $_POST['email_145'];

	$sql = "INSERT INTO tbl_145 VALUES (null, '$nama','$email')";
	$hasil = mysqli_query ($koneksi, $sql);
	if (!$hasil){ 
		
		echo " Eksekusi tidak berhasil";
		 }
		else { 
		echo "Berhasil<br>";
		echo "<a href='data.php'>Show Data</a>";
	}
	?>

	
</body>
</html>