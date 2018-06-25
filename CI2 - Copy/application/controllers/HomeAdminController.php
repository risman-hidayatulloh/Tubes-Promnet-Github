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

		public function viewDataBayar(){
			$this->cekUser();

			//load model
			$this->load->model('TransaksiModel');

			$data['data'] = $this->TransaksiModel->getAllTransaksi()->result();

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

		public function viewDataService(){
			$this->cekUser();

			$this->load->model('ServiceModel');

			$data['data'] = $this->ServiceModel->getService()->result();

			$this->index();
			$this->load->view('admin/dataserviceview',$data);

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

		public function logout(){
			$this->cekUser();

			$this->session->sess_destroy();
			
			$this->session->set_userdata($userdata);
			redirect('LoginController');
		}
	}

 ?>
