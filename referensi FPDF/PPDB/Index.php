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
	<h3 id="demo" align="center"></h3>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("July 6, 2018 15:37:25").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

	    // Get todays date and time
	    var now = new Date().getTime();
	    
	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;
	    
	    // Time calculations for days, hours, minutes and seconds
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	    // Output the result in an element with id="demo"
	    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	    + minutes + "m " + seconds + "s ";
	    
	    // If the count down is over, write some text 
	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("demo").innerHTML = "EXPIRED";
	    }
	}, 1000);
	</script>
	<!--Form Login  -->
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<div class="jumbotron">
			    	<form action="proses_login.php" method="POST" class="form-signin">
			    		<center>
				    		<img src="Images/LambangBandung.png" width="100px" height="80px">
			    		</center> <br>
					
					    <input type="text" name="nisn" class="form-control" placeholder="NISN" required autofocus>
					
					    <input type="password" name="password" class="form-control" placeholder="password" required>
			        	<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Masuk</button>
			      </form>
				  <center>
					  <a href="daftar.php">Belum punya akun? Daftar terlebih dahulu</a>
				  </center>
				</div>
			</div>
		</div>
    </div>  




</body>
</html>
