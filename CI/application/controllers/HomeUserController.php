<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUserController extends CI_Controller{


		//kosntruktor
		function __construct(){
			parent::__construct();
		}


		public function index(){
			$this->load->view('loader/header');
			$this->load->view('user/homeuser');
			$this->load->view('loader/footer');
		}

		public function viewPembelian(){
			$this->load->model('usersModel');

			$data['user'] = $this->usersModel->tampil_data()->result();
			$this->load->view('loader/header');
			//$this->load->view('user/homeuser');
			$this->load->view('user/pembelianuser');
		    $this->load->view('loader/footer');
		}
	}

 ?>