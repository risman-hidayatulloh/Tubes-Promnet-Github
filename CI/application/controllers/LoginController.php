<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('loadbootstrap');
		$this->load->view('loginview');
	}


	public function ProsesLogin(){
		//penampungan data
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');


	}
}
?>