<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeUserController extends CI_Controller{


		//kosntruktor
		function __construct(){
			parent::__construct();
		}


		public function index(){
			$this->load->view('loader/loadbootstrap');
			$this->load->view('user/homeuser');
		}


	}


 ?>