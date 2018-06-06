<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	//konstruktor
	function __construct(){
		parent::__construct();
	}

	//cek user
	public function cekUser(){
		if(!empty($this->session->loged_in)){
			if($this->session->jenis_user != 2){
				redirect('HomeUserController');
			}else{
				redirect('HomeAdminController');
			}
		}
	}


	var $status = false;
	
	public function index(){
		$this->cekUser();

		$status['status'] = $this->status;
		$this->load->view('global/loadbootstrap');
		$this->load->view('loginview',$status);
	}


	public function ProsesLogin(){
		//penampungan data
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		//load model
		$this->load->model('UsersModel');

		$cek = $this->UsersModel->getData($data);

		if($cek->num_rows()){

			$userdata = array(
				'username' => $data['username'],
				'password' => $data['password'],
				'jenis_user' => $cek->result()[0]->jenis_user,
				'loged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			if($this->session->jenis_user == 1){
				redirect('HomeUserController');
			}else{
				redirect('HomeAdminController');
			}

		}else{
			$this->status = true;
			$this->index();
		}
	}	
}
?>
