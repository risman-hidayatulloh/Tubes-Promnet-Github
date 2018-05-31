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

		public function index(){
			$this->cekUser();
			
			$this->load->view('loader/loadbootstrap');
			$this->load->view('admin/homeadmin');
		}

		public function logout(){
			$this->cekUser();

			$this->session->sess_destroy();
			
			$this->session->set_userdata($userdata);
			redirect('LoginController');
		}
	}

 ?>