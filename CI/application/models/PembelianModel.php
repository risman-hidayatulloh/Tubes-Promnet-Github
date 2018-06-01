<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PembelianModel extends CI_Model {

		function __construct(){
			parent::__construct();
		}
		

		function tambahTmp($data){
			$this->db->insert('tmp_pembelian',$data);
		}

		function getTmp(){
			return $this->db->query('SELECT parts.id_part,kode_part,nama_part,harga_ref_part from tmp_pembelian,href_parts,parts where parts.id_part = tmp_pembelian.id_part and href_parts.id_part = tmp_pembelian.id_part');
		}

		function deleteTmp($id){
			$this->db->where('id_part',$id);
			$this->db->delete('tmp_pembelian');
		}
		
	}
?>