<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Edit</title>
</head>
<body>
	<div class="w-50 mx-auto mt-5">
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_145 WHERE id_145='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	 ?>

	 <h1>Form Edit</h1>
	 <?php 
	 while ($row = mysqli_fetch_array($hasil)) 
	{

	  ?>
	  <form method="post" action="update.php" class=" border p-3 mt-3">
	  	<input type="hidden" name="id_145" value="<?php echo $row ['id_145']?>">
	  	<label>Nama 145</label>
		<input type="text" name="nama_145" value="<?php echo $row ['nama_145'] ?>" class="form-control"> <br>
		<label>Email 145</label>
		<input type="text" name="email_145" value="<?php echo $row ['email_145'] ?>" class="form-control"> <br>
		<input type="submit" class="btn btn-succes value="Update">
	</form>
	<?php 
	}
	 ?>
	</div>
</body>
</html>