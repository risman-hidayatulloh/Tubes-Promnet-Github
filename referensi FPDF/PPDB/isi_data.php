<?php 
	session_start();
	$nisn = $_SESSION['nisn'];
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

	<!-- Header -->
	<nav class="navbar navbar-default">
		<center>
			<h1>PPDB KOTA BANDUNG</h1>
		</center>
	</nav>

	<!--Form Isian  -->
	<div class="container">
    	<form action="prosesprint.php" method="post" class="" enctype="multipart/form-data">
			<div class="jumbotron">
	    		<center>
		    		<img src="Images/LambangBandung.png" width="100px" height="80px">
	    		</center> <br>
				<hr>
				<h4>DATA DIRI</h4>
				<div class="row">
					<div class="col-md-6">
				    	NISN : <br><input type="text" name="" value="<?php echo $nisn?>" class="form-control" readonly><br>
				    	Nama : <br><input type="text" name="nama" placeholder="nama" required="" class="form-control"><br>
				    	Lahir :<br><input type="date" name="lahir" required="" class="form-control"><br>
				    	Asal Sekolah :<br><input type="text" name="asal" placeholder="Asal Sekolah" required="" class="form-control"><br>    	
					</div>
				</div>
				<hr>
				<h4>DATA UJIAN</h4>
				<div class="row">
					<div class="col-md-6">
				    	NO.SKHUN : <br><input type="text" name="skhun" placeholder="SKHUN" required="" class="form-control"><br>
				    	NO.IJAZAH :<br><input type="text" name="ijazah" placeholder="IJAZAH" required="" class="form-control"><br>    	
					</div>
				</div>
				<hr>
				<h4>DATA NILAI UJIAN</h4>
				<div class="row">
					<div class="col-md-6">
				    	Bahasa Indonesia : <br><input type="number" name="indonesia" placeholder="Bahasa Indonesia" required="" class="form-control"><br>
				    	Bahasa Inggris :<br><input type="number" name="inggris" placeholder="Bahasa inggris" required="" class="form-control"><br>
				    	Matematika :<br><input type="number" name="matematika" placeholder="Matematika" required="" class="form-control"><br>
				    	Fisika :<br><input type="number" name="fisika" placeholder="Fisika" required="" class="form-control"><br>
				    	Kimia :<br><input type="number" name="kimia" placeholder="Bahasa inggris" required="" class="form-control"><br>
				    	Biologi :<br><input type="number" name="biologi" placeholder="Biologi" required="" class="form-control"><br>
					</div>
					<div class="col-md-6">
						Foto SKHUN: <input type="file" name="fskhun" accept="image/*" class="form-control">
						Foto ijazah: <input type="file" name="fijazah" accept="image/*" class="form-control">
						Foto Diri: <input type="file" name="fdiri" accept="image/*" class="form-control">
					</div>
				</div>
				


				<div class="row">
					<div class="col-md-offset-4 col-md-4">
						<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Kirim</button>
					</div>
				</div>
			</div>
	      </form>
		</div>
    </div> 




</body>
</html>

