<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

<<<<<<< HEAD
		public function getData(){
			return $this->db->query('SELECT kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part');
=======
		public function getAll(){
			$this->db->select('*');
			$this->db->from('parts');
			return $this->db->get();
>>>>>>> 5a15d0f35d2f79720ddc3f3771fbd5f9e261a4cb
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