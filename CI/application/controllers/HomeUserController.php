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
			$this->load->view('loader/footer');
		}

		public function viewPembelian(){
			$this->cekUser();
			$this->load->model('PartsModel');

			$data['user'] = $this->PartsModel->getData();
			$this->index();
			$this->load->view('user/pembelianuser');
		    
		}

		public function logOut(){
			$this->cekUser();

			$this->session->sess_destroy();
			$this->session->set_userdata($userdata);

			redirect('LoginController');
		}

	}

 ?>