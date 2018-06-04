<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ServiceModel extends CI_Model {
		

		function __construct(){
			parent::__construct();
		}

		
		public function addTmp($data){
			$this->db->insert('tmp_pelanggan',$data);
		}

		public function getTmp(){
			$this->db->distinct('*');
			$this->db->from('tmp_pelanggan');
			return $this->db->get();
		}

		public function truncateTmp(){
			$this->db->query('truncate table tmp_pelanggan');
		}
	}
	


 ?>