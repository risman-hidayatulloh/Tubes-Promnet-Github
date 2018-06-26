<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUserController extends CI_Controller{

		var $current = array(
			'home' => null,
			'transaksi' => null,
			'laporantransaksi' => null,
			'logout' => null
		);

		//kosntruktor
		function __construct(){
			parent::__construct();
			$this->load->helper('array');
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

			$data['status'] = $this->current;

			$this->load->view('global/loadbootstrap');
			$this->load->view('user/homeuser',$data);
			$this->load->view('global/footer');
		}

		public function viewPembelian(){
			$this->cekUser();
			$this->load->model('PartsModel');

			$data['data'] = $this->PartsModel->getData()->result();
			
			$this->current['penjualan'] = 'active';

			$this->index();
			$this->load->view('user/pembelianview',$data);
		}

		public function viewService(){
			$this->cekUser();

			$this->current['service'] = 'active';

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

			$this->load->model('PembelianModel');
			$data['id_part'] = $id;

			$this->PembelianModel->tambahTmp($data);

			$this->viewPembayaran();

		}

		public function viewPembayaran(){
			$this->cekUser();

			$this->load->model('PembelianModel');
			$this->load->model('PartsModel');
			$data['data'] = $this->PembelianModel->getTmp()->result();
			$data['barang'] = $this->PartsModel->getData()->result();
			

			$this->current['pembayaran'] = 'active';
			
			$this->load->model('ServiceModel');
			$data['pelanggan'] = $this->ServiceModel->getTmp()->result();


			$this->index();
			$this->load->view('user/pembayaranview',$data);
		}

		public function bayar(){
			$this->cekUser();

			//load model
			$this->load->model('PembelianModel');
			$this->load->model('ServiceModel');
			$this->load->model('TransaksiModel');

			$tmp1 = $this->PembelianModel->getTmp()->result();
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
				for($i=0; $i<$tmp->jumlah; $i++){
					$this->TransaksiModel->addDetailTransaksi($transaksi);
				}
			}
			


			$this->PembelianModel->truncate();

			$this->ServiceModel->truncateTmp();
			
			$this->viewPembayaran();

		}

		public function cancelTransaksi($id){
			$this->cekUser();
			
			$this->load->model('TransaksiModel');

			$this->TransaksiModel->cancelTransaksi($id);


			redirect('HomeUserController/viewTransaksi');
		}

		public function unCancelTransaksi($id){
			$this->cekUser();

			$this->load->model('TransaksiModel');

			$this->TransaksiModel->unCancelTransaksi($id);

			redirect('HomeUserController/viewTransaksi');
		}

		public function search(){
			$q = $this->input->post('cari');
			$this->load->model('PembelianModel');
			$data['data'] = $this->PembelianModel->search($q)->result();
			$this->index();
			$this->load->view('user/pembelianview', $data);
		}

		public function tambahPembelian(){
			$this->cekUser();


			$this->load->model('PembelianModel');
			$id = $this->PembelianModel->getId($this->input->post('barang'))->result();
			
			$data['id_part'] = $id[0]->id_part;

			for($i=0; $i<$this->input->post('jumlah'); $i++){
				$this->PembelianModel->tambahTmp($data);
			}

			$this->viewPembayaran();
		}

		public function deletePembelian($id){
			$this->cekUser();

			$this->load->model('PembelianModel');
			$this->PembelianModel->deleteTmp($id);
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

	        $pdf->Cell(100,7,'Rincian Pembelian',0,0);
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
	        $pembelian = $this->db->query('SELECT parts.id_part,kode_part,nama_part,harga_ref_part from tmp_pembelian,href_parts,parts where parts.id_part = tmp_pembelian.id_part and href_parts.id_part = tmp_pembelian.id_part')->result();
	        //$pembelian = $this->db->get('detail_penjualan_parts')->result();
	        foreach ($pembelian as $row){
	        	$pdf->Cell(10,6,$no++,1,0, 'C');
	            $pdf->Cell(50,6,$row->kode_part,1,0);
	        	$pdf->Cell(70,6,$row->nama_part,1,0);
	            $pdf->Cell(30,6,$row->harga_ref_part,1,1);
	        }

	        $pdf->SetFont('Arial','B',10);

	        $totalbayar = 0;

	        foreach($pembelian as $tmp){
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

		public function viewTransaksi(){
			$this->cekUser();
			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getAllTransaksi()->result();
			
			$this->current['transaksi'] = 'active';

			$this->index();
			$this->load->view('user/transaksiview',$data);

		}

		public function detailTransaksi($id){
			$this->cekUser();
			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getDetailTransaksi($id)->result();

			$this->index();
			$this->load->view('user/detailtransaksiview',$data);
		}

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();

			redirect('LoginController');
		}

	}

 ?>
