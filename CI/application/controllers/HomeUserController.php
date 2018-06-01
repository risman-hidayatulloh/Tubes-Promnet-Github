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

		public function tambahPembelian(){

		}

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();

			redirect('LoginController');
		}

	}

 ?>