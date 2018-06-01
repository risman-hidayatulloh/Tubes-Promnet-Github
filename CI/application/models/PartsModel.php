<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

		public function getAll(){
			$this->db->select('*');
			$this->db->from('parts');
			return $this->db->get();
		}

		public function getByIdPart($id_part){
			$this->db->select('*');
			$this->db->from('parts');
			$this->db->where('id_part', $id_part);
			return $this->db->get();
		}

		public function getByIdKategori($nama_part){
			$this->db->select('*');
			$this->db->from('parts');
			$this->db->where('nama_part', $nama_part);
			return $this->db->get();
		}


		public function deletePart($id_part){
			$this->db->where('id_part', $id_part);
			$this->db->delete('t_part');
		}
	}


 ?>