<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

		public function getData(){
			return $this->db->query('SELECT kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part');
		}


	}


 ?>