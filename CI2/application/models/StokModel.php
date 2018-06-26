<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class StokModel extends CI_Model {
		

		function __construct(){
			parent::__construct();
		}

		
		public function addStok($data){
			$this->db->insert('stok_parts',$data);
		}

		public function getStok(){
			$this->db->distinct('*');
			$this->db->from('stok_parts');
			return $this->db->get();
		}

		public function truncateStok(){
			$this->db->query('truncate table stok_parts');
		}


	}
	


 ?>