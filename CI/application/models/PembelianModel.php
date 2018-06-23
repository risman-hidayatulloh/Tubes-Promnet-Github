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
		
		function search($name_part){
			return $this->db->query("SELECT parts.id_part,kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part AND nama_part LIKE '%".$name_part."%'");
		}

		function truncate(){
			$this->db->query("truncate table tmp_pembelian");
		}

		function getPembelian(){
			return $this->db->query('select *from transaksis,detail_transaksi where transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part < 11');
		}

		function getPembelianFiltered($filter){
			return $this->db->query('select *from transaksis,detail_transaksi where transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part < 11 group by '.$filter.'(waktu)' );
		}

	}
?>