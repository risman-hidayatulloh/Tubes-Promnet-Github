<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeAdminController extends CI_Controller{

		//konstruktor
		function __construct(){
			parent::__construct();
		}

		//cek user
		public function cekUser(){
			if(!$this->session->loged_in){
				redirect('LoginController');
			}

			if($this->session->jenis_user != 2){
				redirect('HomeUserController');
			}
		}

		public function pengajuanTransaksi(){
			$this->cekUser();

			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getAllTransaksi()->result();

			$this->index();
			$this->load->view('admin/pengajuantransaksiview',$data);
		}

		public function viewDataBayar(){
			$this->cekUser();

			//load model
			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getAllDataTransaksi()->result();

			$this->index();
			$this->load->view('admin/datapembayaranview',$data);
			

		}

		public function filterDataBayar(){
			$this->cekUser();

			$filter = $this->input->post('berdasarkan');

			if($filter == "Transaksi"){
				$this->viewDataBayar();
			}else{

				if($filter == 'Tanggal'){
					$filter = 'DAY';
				}else if($filter == 'Bulan'){
					$filter = 'MONTH';
				}else{
					$filter = 'YEAR';
				}

				$this->load->model('TransaksiModel');
				$data['data'] = $this->TransaksiModel->getFilterTransaksi($filter)->result();

				$this->index();
				$this->load->view('admin/datapembayaranview',$data);

			}

		}

		public function viewInputStok(){
			$this->cekUser();

			$this->load->model('PartsModel');
			$data['barang'] = $this->PartsModel->getData()->result();
			$this->index();
			$this->load->view('admin/stokview', $data);

		}

		public function StokAction(){
			$this->cekUser();

			$stok = array(
				'id_part' => $this->input->post('barang'),
				'kode_seri' => $this->input->post('kodeseri'),
				'status' => 1

			);

			$this->load->model('StokModel');
			$this->StokModel->addStok($stok);

			

			$this->viewInputStok();

		}

		public function viewDataServiceFiltered(){
			$this->cekUser();

			$filter = $this->input->post('berdasarkan');

			if($filter == 'Transaksi'){
				$this->viewDataService();
			}else{

				if($filter == 'Tanggal'){
					$filter = 'DAY';
				}else if($filter == 'Bulan'){
					$filter = 'MONTH';
				}else{
					$filter = 'YEAR';
				}

				$this->load->model('ServiceModel');
				$data['data'] = $this->ServiceModel->getServiceFiltered($filter)->result();

				$this->index();
				$this->load->view('admin/dataserviceview',$data);
			}

		}

		public function viewDataPembelian(){
			$this->cekUser();

			$this->load->model('PembelianModel');

			$data['data'] = $this->PembelianModel->getPembelian()->result();

			$this->index();

			$this->load->view('admin/datapembelianview',$data);

		}

		public function viewDataPembelianFiltered(){
			$this->cekUser();

			$filter = $this->input->post('berdasarkan');

			if($filter == 'Transaksi'){
				$this->viewDataPembelian();
			}else{

				if($filter == 'Tanggal'){
					$filter = 'DAY';
				}else if($filter == 'Bulan'){
					$filter = 'MONTH';
				}else{
					$filter = 'YEAR';
				}

				$this->load->model('PembelianModel');
				$data['data'] = $this->PembelianModel->getPembelianFiltered($filter)->result();

				$this->index();
				$this->load->view('admin/datapembelianview',$data);
			}
		}

		public function index(){
			$this->cekUser();
			
			$this->load->view('global/loadbootstrap');
			//$this->load->view('global/header');
			$this->load->view('admin/homeadmin');
			$this->load->view('global/footer');
		}

		public function acceptPengajuan($id){
			$this->cekUser();

			$this->load->model('TransaksiModel');
			$this->TransaksiModel->acceptCancel($id);


			// $this->pengajuanTransaksi();
			redirect('HomeAdminController/pengajuanTransaksi');
		}

		public function detailTransaksi($id){
			$this->cekUser();
			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getDetailTransaksi($id)->result();

			$this->index();
			$this->load->view('admin/detailtransaksiview',$data);
		}

		public function unAcceptPengajuan($id){
			$this->cekUser();

			$this->load->model('TransaksiModel');
			$this->TransaksiModel->unAcceptCancel($id);


			redirect('HomeAdminController/pengajuanTransaksi');
		}

		public function logout(){
			$this->cekUser();

			$this->session->sess_destroy();
			
			$this->session->set_userdata($userdata);
			redirect('LoginController');
		}

	}

 ?>
