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

		public function search(){
			$this->load->model('PartsModel');
			$nama_part = $this->input->post('search');

			if (isset($nama_part) and !empty($nama_part)) {
				$data['data'] = $this->PartsModel->search($nama_part);
				$this->load->view('user/pembelianview',$data);
			}else{
				redirect($this->viewPembelian());
			}
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

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();

			redirect('LoginController');
		}

	}

 ?>