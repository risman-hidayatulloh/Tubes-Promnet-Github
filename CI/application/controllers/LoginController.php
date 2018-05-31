<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	
	public function index()
	{
<<<<<<< HEAD
<<<<<<< HEAD
		$status['status'] = $this->status;
		$this->load->view('loader/header');
		$this->load->view('loginview',$status);
		$this->load->view('loader/footer');
=======
		$this->load->view('loadbootstrap');
		$this->load->view('loginview');
>>>>>>> parent of 9dd83ae... update tampilan login(+session), home user
=======
		$this->load->view('loadbootstrap');
		$this->load->view('loginview');
>>>>>>> parent of 9dd83ae... update tampilan login(+session), home user
	}


	public function ProsesLogin(){
		//penampungan data
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');


	}
}
?>