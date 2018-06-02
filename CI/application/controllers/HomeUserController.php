<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUserController extends CI_Controller{


		//kosntruktor
		function __construct(){
			parent::__construct();
		}

		//cek user
		public function cekUser(){
			if(!$this->session->loged_in){
				redirect('LoginController');
			}

			if($this->session->jenis_user != 1){
				redirect('HomeAdminController');
			}
		}

		public function index(){
			$this->cekUser();
			$this->load->view('loader/header');
			$this->load->view('user/homeuser');
		}

		public function viewPembelian(){
			$this->cekUser();
			$this->load->model('PartsModel');

			$data['data'] = $this->PartsModel->getData()->result();
			$this->index();
			$this->load->view('user/pembelianview',$data);
		}

		public function viewService(){
			$this->cekUser();

			$this->index();
			$this->load->view('user/serviceview');


		}

		public function viewPembayaran(){
			$this->cekUser();

			$this->load->model('PembelianModel');
			$data['data'] = $this->PembelianModel->getTmp()->result();
			
			$this->index();
			$this->load->view('user/pembayaranview',$data);
		}

		public function tambahPembelian($id){
			$this->cekUser();


			$this->load->model('PembelianModel');
			$data['id_part'] = $id;

			$this->PembelianModel->tambahTmp($data);

			$this->viewPembelian();
		}

		public function deletePembelian($id){
			$this->cekUser();

			$this->load->model('PembelianModel');
			$this->PembelianModel->deleteTmp($id);
			$this->viewPembayaran();
		}

		public function printPembayaran(){
			include("assets/FPDF/fpdf.php");

			/*$pdf = new FPDF('p','cm','A4');
			$pdf->Addpage();
			$pdf->AliasNbPages();
			$pdf->SetFont('Arial','B','20');
			$pdf->Cell(18,1,'Bukti Pembayaran',0,0,'C');
			$pdf->Image('assets/lambang/honda.png',5,1,-300);*/

			$pdf = new FPDF('l','mm','A5');
	        // membuat halaman baru
	        $pdf->AddPage();
	        // setting jenis font yang akan digunakan
	        $pdf->SetFont('Arial','B',14);
	        // mencetak string 
	        $pdf->Cell(190,7,'Bukti Pembayaran',0,1,'C');
	        $pdf->Image('assets/lambang/honda.png',30,12,-150);
	        $pdf->SetFont('Arial','B',12);
	        $pdf->Cell(190,7,'Bandung Raya Motor ( PT. HONDA MOTOR )',0,1,'C');
	        $pdf->SetFont('Arial','B',10);
	        $pdf->Cell(190,5,'Jln. Dr. Setiabudi No. 157, Bandung',0,1,'C');
	        $pdf->Cell(10,7,'',0,1);

	        $query2 = $this->db->query('SELECT * FROM pelanggans');
			$row = $query2->row();
			//echo $row->kode_pelanggan;
			//$query2->free_result();

	        $pdf->Cell(25,7,'Kode',0,0);
	        $pdf->Cell(75,7,": $row->kode_pelanggan",0,0);
	        $pdf->Cell(25,7,'Nama',0,0);
	        $pdf->Cell(75,7,": $row->nama_pelanggan",0,1);

	        $pdf->Cell(25,7,'Alamat',0,0);
	        $pdf->Cell(75,7,": $row->alamat_pelanggan",0,0);
	        $pdf->Cell(25,7,'Plat Nomor',0,0);
	        $pdf->Cell(75,7,": $row->plat_nomor",0,1);

	        $pdf->Cell(25,7,'No STNK',0,0);
	        $pdf->Cell(75,7,": $row->no_stnk",0,1);
	        
	        $pdf->Cell(10,7,'',0,1);

	        $pdf->Cell(100,7,'Rincian Pembelian',0,0);
	        // Memberikan space kebawah agar tidak terlalu rapat
	        $pdf->Cell(10,7,'',0,1);
	        $pdf->SetFont('Arial','B',10);
	        $pdf->Cell(10,6,'No',1,0,'C');
	        $pdf->Cell(50,6,'Kode',1,0,'C');
	        $pdf->Cell(70,6,'Keterangan',1,0,'C');
	        $pdf->Cell(30,6,'Harga',1,1,'C');
	        $pdf->SetFont('Arial','',10);
	        $no = 1;
	        $pembelian = $this->db->query('SELECT parts.id_part,kode_part,nama_part,harga_ref_part from tmp_pembelian,href_parts,parts where parts.id_part = tmp_pembelian.id_part and href_parts.id_part = tmp_pembelian.id_part')->result();
	        //$pembelian = $this->db->get('detail_penjualan_parts')->result();
	        foreach ($pembelian as $row){
	        	$pdf->Cell(10,6,$no++,1,0, 'C');
	            $pdf->Cell(50,6,$row->kode_part,1,0);
	        	$pdf->Cell(70,6,$row->nama_part,1,0);
	            $pdf->Cell(30,6,$row->harga_ref_part,1,1);
	        }

	        $pdf->SetFont('Arial','B',10);
	        $pdf->Cell(130,7,'Total: ',0,1, 'R');


			$pdf->Output();
		}

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();

			redirect('LoginController');
		}

	}

 ?>