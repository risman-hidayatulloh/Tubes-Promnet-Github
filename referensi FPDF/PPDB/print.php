<?php 
	session_start();
	$nisn = $_SESSION['nisn'];
	$nama = $_SESSION['nama'];
	$lahir = $_SESSION['lahir'];
	$asal = $_SESSION['asal'];
	$skhun = $_SESSION['skhun'];
	$ijazah = $_SESSION['indonesia'];
	$indonesia = $_SESSION['indonesia'];
	$inggris = $_SESSION['inggris'];
	$matematika = $_SESSION['matematika'];
	$fisika = $_SESSION['fisika'];
	$kimia = $_SESSION['kimia'];
	$biologi = $_SESSION['biologi'];
	$rerata = ($indonesia+$inggris+$matematika+$fisika+$kimia+$biologi)/6;
	$fdiri = $_SESSION['fdiri'];

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

	<!--Form Login  -->
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="jumbotron">
			    	<form action="#" method="" class="form-signin">
			    		<center>
				    		<img src="Images/LambangBandung.png" width="100px" height="80px">
			    		</center> <br>
					
					  	<label>NISN:</label><input type="text" name="" class="form-control"   value="<?php echo "$nisn"?>" readonly>
					    <label>Nama:</label><input type="text" name="" class="form-control"   value="<?php echo "$nama"?>" readonly>
						<label>Lahir:</label><input type="date" name="" class="form-control"   value="<?php echo "$lahir"?>" readonly>
						<label>Asal:</label><input type="text" name="" class="form-control"   value="<?php echo "$asal"?>" readonly>
						<label>NO.SKHUN:</label><input type="text" name="" class="form-control"   value="<?php echo "$skhun"?>" readonly>
						<label>NO>IJAZAH:</label><input type="text" name="" class="form-control"   value="<?php echo "$ijazah"?>" readonly>
						<label>Nilai B.Indonesia:</label><input type="number" name="" class="form-control"   value="<?php echo "$indonesia"?>" readonly>
						<label>Nilai B.Inggris:</label><input type="number" name="" class="form-control"   value="<?php echo "$inggris"?>" readonly>
						<label>Nilai B.Matematika:</label><input type="number" name="" class="form-control"   value="<?php echo "$matematika"?>" readonly>
						<label>Nilai B.Fisika:</label><input type="number" name="" class="form-control"   value="<?php echo "$fisika"?>" readonly>
						<label>Nilai B.Kimia:</label><input type="number" name="" class="form-control"   value="<?php echo "$kimia"?>" readonly>
						<label>Nilai B.Biologi:</label><input type="number" name="" class="form-control"   value="<?php echo "$biologi"?>" readonly>
						<label>Nilai Rerata UN:</label><input type="number" name="" class="form-control"   value="<?php echo "$rerata"?>" readonly>
						<img src="<?php echo $fdiri ?>" width="100" height="100">
												
			        	<a class="btn btn-lg btn-primary btn-block" onClick="location.href='printpdf.php'">Print Data</a>
			      </form>
				</div>
			</div>
		</div>
    </div> 
</body>
</html>

<?php 

	




 ?>
