 <?php 

	//mengambil variabel koneksi
	require_once "connect.php";

	session_start();

	$nisn = $_POST['nisn'];
	$password = $_POST['password'];

	$_SESSION['nisn'] = $nisn;



	$query = "select password from akun where nisn='$nisn'";
	$sql = mysqli_query($conn,$query);
	$truepassword = mysqli_fetch_assoc($sql);


	if($nisn != 'admin' && $password != 'admin'){
		if(mysqli_num_rows($sql) == 0){
			echo "NISN TIDAK TERDAFTAR";
			require_once "Index.php";
		}else{
			if($truepassword['password'] == $password){
				
				$query = "select status from akun where nisn='$nisn'";
				$sql = mysqli_query($conn,$query);

				$status = mysqli_fetch_assoc($sql);

				if($status['status'] == 0){
					session_start();
					$_SESSION['nisn'] = $nisn;
					header("location:gantipw.php");
				}else{
					header("location:isi_data.php");
				}


			}else{
				echo "password salah";
				require_once "Index.php";
			}
		}
	}else{
		header("location:admin.php");
	}

 ?>