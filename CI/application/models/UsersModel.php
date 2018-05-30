<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class UsersModel extends CI_Model{

		//kosnstruktor
		function __construct(){
			parent::__construct();
		}

		public function getData($data){
			$this->db->distinct('*');
			$this->db->from('users');
			$this->db->where('username',$data['username']);
			$this->db->where('password',$data['password']);
			return $this->db->get();

			//$this->db->select('*')->from('users')->where('email', $data['email'])->get();
		}

		public function insertData($data){
			$this->db->insert('users',$data);
		}

		public function updateData($data){
			$this->db->update('users',$data);	
		}

		public function getAllData(){
			$this->db->select('*');
			$this->db->from('users');
			return $this->db->get();
		}

		public function tampil_data(){
			$this->db->select('*');
			$this->db->from('parts');
			return $this->db->get();
		}	
	}

 ?>		