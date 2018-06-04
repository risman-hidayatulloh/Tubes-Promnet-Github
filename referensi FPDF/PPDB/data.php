<?php 
	
	require_once "connect.php";

	$query = "select *from akun order by id_akun";
	$sql = mysqli_query($conn,$query);

	

 ?>