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
			    	<form action="#" method="POST" class="form-signin">
			    		<center>
				    		<img src="Images/LambangBandung.png" width="100px" height="80px"> <br><br>
						<?php 
							session_start();
							require_once "connect.php";
							if(isset($_POST['password1']) && ($_POST['password2']) ){

								$password1 = $_POST['password1'];
								$password2 = $_POST['password2'];
								$nisn = $_SESSION['nisn'];


								if($password1 != $password2){
									echo "password tidak sama!";
								}else{
									// session_start();
									$query = "update akun set password ='$password1' where nisn = '$nisn'";
									$sql = mysqli_query($conn,$query);

									$query = "update akun set status = 1 where nisn = '$nisn' ";
									$sql = mysqli_query($conn,$query);

									header("location:isi_data.php");

								}
							}
						 ?>

			    		</center> <br>
					    <input type="password" name="password1" class="form-control" placeholder="new-Password" required autofocus>
					
					    <input type="password" name="password2" class="form-control" placeholder="re-new-password" required>
			        	<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Ganti</button>
			      </form>
				 
				</div>
			</div>
		</div>
    </div> 
</body>
</html>


