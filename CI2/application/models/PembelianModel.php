<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PembelianModel extends CI_Model {

		function __construct(){
			parent::__construct();
		}
		

		function tambahTmp($data){
			$this->db->insert('tmp_pembelian',$data);
			$this->editStatus($data);
		}

		function getId($data){
			return $this->db->select('id_part')->from('parts')->where('nama_part',$data)->get();
		}

		function editStatus($data){
			$this->db->query('update stok_parts set status = 0 where id_part=' .element('id_part',$data).' order by status desc limit 1 ');
		}

		function getTmp(){
			return $this->db->query('SELECT parts.id_part,kode_part,nama_part,harga_ref_part, count(tmp_pembelian.id_part) as jumlah from tmp_pembelian,href_parts,parts where parts.id_part = tmp_pembelian.id_part and href_parts.id_part = tmp_pembelian.id_part group by id_part');
		}

		function deleteTmp($id){
			$this->db->where('id_part',$id);
			$this->db->delete('tmp_pembelian');
		}

		function search($name_part){
			return $this->db->query("SELECT parts.id_part,kode_part, nama_part, harga_ref_part, count(stok_parts.id_stok) as stok  from parts, href_parts, stok_parts WHERE parts.id_part = href_parts.id_part and parts.id_part = stok_parts.id_part AND nama_part LIKE '%".$name_part."%'");
		}

		function truncate(){
			$this->db->query("truncate table tmp_pembelian");
		}

		function getPembelian(){
			return $this->db->query('select *from transaksis,detail_transaksi where status = 1 and transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part < 11');
		}

		function getPembelianFiltered($filter){
			return $this->db->query('select *from transaksis,detail_transaksi where status = 1 transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part < 11 group by '.$filter.'(waktu)' );
		}

	}
?>