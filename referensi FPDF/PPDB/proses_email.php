<?php 
	session_start();

	//mengambil variabel koneksi
	include_once "connect.php";
	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require_once "PHPMailer/src/Exception.php";
	require_once "PHPMailer/src/PHPMailer.php";
	require_once "PHPMailer/src/SMTP.php";

	//fetch data dari form html
	$nisn = $_POST['nisn'];
	$email = $_POST['email'];

	$_SESSION['nisn'] = $nisn;

	//membuat kode password
	$password = substr(md5($nisn),0, 10);


	$message = "Password anda adalah :" . $password;
	$header = "Password";
	
	$query = "insert into akun (id_akun,nisn,email,password,status) values ('NULL','$nisn','$email','$password','0')";


	$query_cek = "select nisn from akun where nisn = '$nisn'";
	$sql_cek = mysqli_query($conn,$query_cek);


	if(mysqli_num_rows($sql_cek)==0){

		$sql = mysqli_query($conn,$query);
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		$mail->isSMTP();

		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'ppdb.reyhan@gmail.com';                 // SMTP username
		    $mail->Password = 'dvorak123';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('admyoker@gmail.com', 'PPDB KOTA BANDUNG');
		    $mail->addAddress($_POST['email'], $_POST['nisn']);     // Add a recipient
		    


		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'PASSWORD INI RAHASIA';
		    $mail->Body    = 'PASSWORD anda : '. $password;
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';

		    header("location:konfirmasi.php");
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}else{
		echo "NISN sudah terdaftar!";
		require_once "daftar.php";
	}
 ?>
