<?php 
	require_once "data.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- css untuk login -->
	<link rel="stylesheet" type="text/css" href="css/login1.css">
	<!-- Icon untuk bar -->
	<link rel="shortcut icon" href="Images/LambangBandung.png">
	<!-- Memanggil Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>PPDB KOTA BANDUNG</title>
</head>
<body>

	<div class="container">
		<table class="table table-dark table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>NISN</th>
					<th>Nama</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php foreach($sql as $hasil){?>
			<tr>
				<td><?php echo $hasil['id_akun']; ?></td>
				<td><?php echo $hasil['nisn']; ?></td>
				<td><?php echo $hasil['nama']; ?></td>
				<td><img src="<?php echo $hasil['foto'] ?>" width="20px" height="30px"></td>
				<td><a href="delete_admin.php?id=<?php echo $hasil['id_akun'];?>" class="btn btn-danger">delete</a>
					</td>
			</tr>
			<?php } ?>

		</table>
	</div>



</body>
</html>