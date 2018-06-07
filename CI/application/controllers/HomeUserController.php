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
			$this->load->view('global/loadbootstrap');
			$this->load->view('user/homeuser');
			$this->load->view('global/footer');
		}

		public function viewPenjualan(){
			$this->cekUser();
			$this->load->model('PartsModel');

			$data['data'] = $this->PartsModel->getData()->result();
			$this->index();
			$this->load->view('user/penjualanview',$data);
		}

		public function viewService(){
			$this->cekUser();

			$this->index();
			$this->load->view('user/serviceview');
		}

		public function serviceAction(){
			$this->cekUser();

			$service = array(
				'kode_pelanggan' => $this->input->post('kodepelanggan'),
				'nama_pelanggan' => $this->input->post('namapemilik'),
				'alamat_pelanggan' => $this->input->post('alamat'),
				'plat_nomor' => $this->input->post('nopolisi'),
				'no_stnk' => $this->input->post('nostnk')
			);

			$this->load->model('ServiceModel');
			$this->ServiceModel->addTmp($service);

			$id = 0;
			if($this->input->post('Paket 1')){
				$id = 11;  
			}else if($this->input->post('Paket 2')){
				$id = 12;
			}else{
				$id = 13;
			}

			$this->load->model('PenjualanModel');
			$data['id_part'] = $id;

			$this->PenjualanModel->tambahTmp($data);

			$this->viewService();

		}

		public function viewPembayaran(){
			$this->cekUser();

			$this->load->model('PenjualanModel');
			$data['data'] = $this->PenjualanModel->getTmp()->result();
			
			$this->load->model('ServiceModel');
			$data['pelanggan'] = $this->ServiceModel->getTmp()->result();


			$this->index();
			$this->load->view('user/pembayaranview',$data);
		}

		public function bayar(){
			$this->cekUser();

			//load model
			$this->load->model('PenjualanModel');
			$this->load->model('ServiceModel');
			$this->load->model('TransaksiModel');

			$tmp1 = $this->PenjualanModel->getTmp()->result();
			$harga = 0;

			foreach($tmp1 as $tmp){
				$harga = $harga + $tmp->harga_ref_part;
			}

			$data = array(
				'id_pelanggan' => 1,
				'kode_transaksi' => md5(date("Y-m-d h:i:sa")),
				'waktu' => date("Y-m-d h:i:sa"),
				'bayar' =>  $harga
			);

			$this->TransaksiModel->addTransaksi($data);
			
			$lastidtransaksi = $this->TransaksiModel->getLastTransaksi()->row();

			foreach($tmp1 as $tmp){
				$transaksi = array(
					'id_transaksi' => $lastidtransaksi->id_transaksi,
					'id_part' => $tmp->id_part
				);
				$this->TransaksiModel->addDetailTransaksi($transaksi);
			}
			


			$this->PenjualanModel->truncate();

			$this->ServiceModel->truncateTmp();
			
			$this->viewPembayaran();

		}

		public function search(){
			$q = $this->input->post('cari');
			$this->load->model('PenjualanModel');
			$data['data'] = $this->PenjualanModel->search($q)->result();
			$this->index();
			$this->load->view('user/penjualanview', $data);
		}

		public function tambahPenjualan($id){
			$this->cekUser();


			$this->load->model('PenjualanModel');
			$data['id_part'] = $id;

			$this->PenjualanModel->tambahTmp($data);

			$this->viewPenjualan();
		}

		public function deletePenjualan($id){
			$this->cekUser();

			$this->load->model('PenjualanModel');
			$this->PenjualanModel->deleteTmp($id);
			$this->viewPembayaran();
		}

		public function printPembayaran(){
			include("assets/FPDF/fpdf.php");

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

	        $pdf->Cell(100,7,'Rincian Penjualan',0,0);
	        $pdf->Cell(100,7,date("Y-m-d h:i:sa"),0,9);
	        // Memberikan space kebawah agar tidak terlalu rapat
	        $pdf->Cell(10,7,'',0,1);
	        $pdf->SetFont('Arial','B',10);
	        $pdf->Cell(10,6,'No',1,0,'C');
	        $pdf->Cell(50,6,'Kode',1,0,'C');
	        $pdf->Cell(70,6,'Keterangan',1,0,'C');
	        $pdf->Cell(30,6,'Harga',1,1,'C');
	        $pdf->SetFont('Arial','',10);
	        $no = 1;
	        $penjualan = $this->db->query('SELECT parts.id_part,kode_part,nama_part,harga_ref_part from tmp_pembelian,href_parts,parts where parts.id_part = tmp_pembelian.id_part and href_parts.id_part = tmp_pembelian.id_part')->result();
	        //$penjualan = $this->db->get('detail_penjualan_parts')->result();
	        foreach ($penjualan as $row){
	        	$pdf->Cell(10,6,$no++,1,0, 'C');
	            $pdf->Cell(50,6,$row->kode_part,1,0);
	        	$pdf->Cell(70,6,$row->nama_part,1,0);
	            $pdf->Cell(30,6,$row->harga_ref_part,1,1);
	        }

	        $pdf->SetFont('Arial','B',10);

	        $totalbayar = 0;

	        foreach($penjualan as $tmp){
	        	$totalbayar = $totalbayar + $tmp->harga_ref_part;
	        }


	        $pdf->Cell(130,7,'Total: Rp.'.$totalbayar,0,1, 'R');

	        $query2 = $this->db->query('SELECT * FROM mekaniks');
			$row = $query2->row();
			//echo $row->kode_pelanggan;
			//$query2->free_result();

	        $pdf->Cell(25,5,'Kode',0,0);
	        $pdf->Cell(75,5,": $row->kode_mekanik",0,1);
	        $pdf->Cell(25,5,'Mekanik',0,0);
	        $pdf->Cell(75,5,": $row->nama_mekanik",0,1);


			$pdf->Output();
		}

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();

			redirect('LoginController');
		}

	}

 ?>
