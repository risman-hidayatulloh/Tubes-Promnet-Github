<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	//konstruktor
	function __construct(){
		parent::__construct();
	}


	var $status = false;
	
	public function index()
	{
		$status['status'] = $this->status;
		$this->load->view('loader/loadbootstrap');
		$this->load->view('loginview',$status);
	}


	public function ProsesLogin(){
		//penampungan data
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		//load model
		$this->load->model('UsersModel');


		if($this->UsersModel->getData($data)->num_rows()){
			
			$userdata = array(
				'username' => $data['username'],
				'password' => $data['password'],
				'logod_in' => TRUE
			);
			$this->session->userdata($userdata);

			redirect('HomeUserController');

		}else{
			$this->status = true;
			$this->index();
		}

	}

	
}
?>