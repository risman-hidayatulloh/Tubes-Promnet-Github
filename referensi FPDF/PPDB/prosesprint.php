<?php 
	session_start();

	require_once "connect.php";
	include ("FPDF/fpdf.php");
	$nisn = $_SESSION['nisn'];

	$nama = $_POST['nama'];
	$lahir = $_POST['lahir'];
	$asal = $_POST['asal'];
	$skhun = $_POST['skhun'];
	$ijazah = $_POST['ijazah'];
	$indonesia = $_POST['indonesia'];
	$inggris = $_POST['inggris'];
	$matematika = $_POST['matematika'];
	$fisika = $_POST['fisika'];
	$kimia = $_POST['kimia'];
	$biologi = $_POST['biologi'];
	$rerata = ($indonesia+$inggris+$matematika+$fisika+$kimia+$biologi)/6;
	$rerata = substr($rerata,0,5);


	$filetmp = $_FILES['fdiri']['tmp_name'];
	$filenama = $_FILES['fdiri']['name'];
	$filetype = $_FILES['fdiri']['type'];
	$filepath = 'foto/'.$filenama;
	move_uploaded_file($filetmp, $filepath);





	$_SESSION['nama'] = $nama;
	$_SESSION['lahir'] = $lahir;
	$_SESSION['asal'] = $asal;
	$_SESSION['skhun'] = $skhun;
	$_SESSION['ijazah'] = $ijazah;
	$_SESSION['indonesia'] = $indonesia;
	$_SESSION['inggris'] = $inggris;
	$_SESSION['matematika'] = $matematika;
	$_SESSION['fisika'] = $fisika;
	$_SESSION['kimia'] = $kimia;
	$_SESSION['biologi'] = $biologi;
	$_SESSION['fdiri'] = $filepath;



	$query = "update akun set nama = '$nama', lahir = '$lahir', asal = '$asal', skhun = '$skhun', ijazah = '$ijazah', indonesia = $indonesia, inggris = $inggris, matematika = $matematika, fisika = $fisika, kimia = $kimia, biologi = $biologi, foto = '$filepath' where nisn='$nisn'";


	$sql = mysqli_query($conn,$query);





	if($sql){
		header("location:print.php");
	}else{
		echo mysqli_error($conn);
	}
 ?>

