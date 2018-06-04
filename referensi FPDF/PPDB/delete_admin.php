<?php 
	
	require_once "connect.php";
	$id = $_GET['id'];

	$query = "delete from akun where id_akun = $id";
	$sql = mysqli_query($conn,$query);


	header("location:admin.php");	


 ?>