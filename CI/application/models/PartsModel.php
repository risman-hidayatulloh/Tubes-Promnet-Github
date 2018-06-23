<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

		public function getData(){
			return $this->db->query('SELECT parts.id_part,kode_part, nama_part, harga_ref_part, count(id_stok) as stok from parts, href_parts, stok_parts WHERE parts.id_part = href_parts.id_part and parts.id_part = stok_parts.id_part group by parts.id_part');

		}

		public function search($nama_part){
			$this->db->select('*');
			$this->db->form('parts');
			$this->db->like('nama_part', $nama_part);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result();
			}else{
				return $query->result();
			}
		}

		public function getAll(){
			$this->db->select('*');
			$this->db->from('parts');
			return $this->db->get();
		}

		public function getDatum($id_part){
			return $this->db->query('SELECT kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part , parts.id_part = '.$id_part);	
		}



	}


 ?>