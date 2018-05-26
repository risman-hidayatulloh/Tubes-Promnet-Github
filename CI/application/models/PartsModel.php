<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

		public function gerData(){

		}


	}


 ?>