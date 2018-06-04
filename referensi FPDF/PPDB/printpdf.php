<?php 
	
	session_start();
	include ("FPDF/fpdf.php");

	$nisn = $_SESSION['nisn'];
	$nama = $_SESSION['nama'];
	$lahir = $_SESSION['lahir'];
	$asal = $_SESSION['asal'];
	$skhun = $_SESSION['skhun'];
	$ijazah = $_SESSION['ijazah'];
	$indonesia = $_SESSION['indonesia'];
	$inggris = $_SESSION['inggris'];
	$matematika = $_SESSION['matematika'];
	$fisika = $_SESSION['fisika'];
	$kimia = $_SESSION['kimia'];
	$biologi = $_SESSION['biologi'];
	$rerata = ($indonesia+$inggris+$matematika+$fisika+$kimia+$biologi)/6;
	$rerata = substr($rerata,0,5);
	$filepath = $_SESSION['fdiri'];



	$pdf = new FPDF('P','cm','A4');
	$pdf->Addpage();
	$pdf->AliasNbPages();
	
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(19,1,'PPDB KOTA BANDUNG',0,0,'C');
	$pdf->Image('images/LambangBandung.png',1,1,-300);
	$pdf->ln(2);


	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(19,1,'BIODATA',0,0,'L');	
	$pdf->ln(1);


	$pdf->SetFont('Times','',12);
	$pdf->Image($filepath,10,3,-300);
	$pdf->Cell(1,1,'NISN',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$nisn,0,0,'L');	
	$pdf->ln(0.5);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'Nama',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$nama,0,0,'L');	
	$pdf->ln(0.5);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'Lahir',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$lahir,0,0,'L');	
	$pdf->ln(0.5);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'Asal',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$asal,0,0);	
	$pdf->ln(2);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(19,1,'DATA BERKAS',0,0,'L');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'NP',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,substr(md5($nisn),0,6),0,0,'L');	
	$pdf->ln(0.5);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'Ijazah',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$ijazah,0,0,'L');	
	$pdf->ln(0.5);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'SKHUN',0,0,'L');	
	$pdf->Cell(1,1,'',0,0,'L');	
	$pdf->Cell(1,1,':',0,0,'L');	
	$pdf->Cell(1,1,$skhun,0,0,'L');	
	$pdf->ln(2);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(19,1,'DATA NILAI',0,0,'L');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'No',1,0,'C');
	$pdf->Cell(5,1,'Mata Pelajaran',1,0,'C');
	$pdf->Cell(2,1,'Bobot',1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'1',1,0,'C');
	$pdf->Cell(5,1,'Bahasa Indonesia',1,0,'C');
	$pdf->Cell(2,1,$indonesia,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'2',1,0,'C');
	$pdf->Cell(5,1,'Bahasa Inggirs',1,0,'C');
	$pdf->Cell(2,1,$inggris,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'3',1,0,'C');
	$pdf->Cell(5,1,'Matematika',1,0,'C');
	$pdf->Cell(2,1,$matematika,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'3',1,0,'C');
	$pdf->Cell(5,1,'Fisika',1,0,'C');
	$pdf->Cell(2,1,$fisika,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'4',1,0,'C');
	$pdf->Cell(5,1,'Kimia',1,0,'C');
	$pdf->Cell(2,1,$kimia,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(1,1,'5',1,0,'C');
	$pdf->Cell(5,1,'Biologi',1,0,'C');
	$pdf->Cell(2,1,$biologi,1,0,'C');	
	$pdf->ln(1);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(6,1,'Rata rata',1,0,'C');
	$pdf->Cell(2,1,$rerata,1,0,'C');	
	$pdf->ln(3);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(9,1,'Orang Tua Siswa / Wali',0,0,'C');
	$pdf->Cell(10,1,'Siswa',0,0,'C');
	$pdf->ln(3);

	$pdf->SetFont('Times','',12);
	$pdf->Cell(9,1,'________________',0,0,'C');
	$pdf->Cell(10,1,$nama,0,0,'C');
	$pdf->ln(3);
	$pdf->Output();
 ?>	
