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
			<div class="col-md-offset-4 col-md-4">
				<div class="jumbotron">
			    	<form action="proses_email.php" method="POST" class="form-signin">
			    		<center>
				    		<img src="Images/LambangBandung.png" width="100px" height="80px">
			    		</center> <br>
					
					    <input type="text" name="nisn" class="form-control" placeholder="NISN" required autofocus>
					
					    <input type="Email" name="email" class="form-control" placeholder="Email" required>
			        
			        	<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Kirim</button>
			      </form>
				  <center>
					  <a href="Index.php">Sudah punya akun? Silahkan Login</a>
				  </center>
				</div>
			</div>
		</div>
    </div> 




</body>
</html>

]