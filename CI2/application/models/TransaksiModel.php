<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TransaksiModel extends CI_Model {

		//konstruktor
		function __construct(){
			parent::__construct();
		}
		
		//addTransaksi
		function addTransaksi($data){
			$this->db->insert('transaksis',$data);
		}

		function addDetailTransaksi($data){
			$this->db->insert('detail_transaksi',$data);
		}

		function getLastTransaksi(){
			return $this->db->query('select *from transaksis order by id_transaksi desc limit 1');
		}

		function getAllTransaksi(){
			$this->db->select('*');
			$this->db->from('transaksis');
			$this->db->order_by('waktu','desc');
			return $this->db->get();
		}

		function getAllDataTransaksi(){
			return $this->db->query('select *from transaksis where status = 1');
		}

		function getFilterTransaksi($filter){
			return $this->db->query('select *from transaksis where status = 1 group by '.$filter.'(waktu)');
		}

		function getDetailTransaksi($id){
			return $this->db->query('select detail_transaksi.id_transaksi, transaksis.kode_transaksi, parts.nama_part, href_parts.harga_ref_part, count(detail_transaksi.id_part) as jumlah from detail_transaksi,parts,href_parts,transaksis where transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part = parts.id_part and parts.id_part = href_parts.id_part and detail_transaksi.id_transaksi ='.$id.' group by detail_transaksi.id_part');
		}

		function cancelTransaksi($id){
			$this->db->query('update transaksis set status = 0 where id_transaksi ='.$id);
		}

		function unCancelTransaksi($id){
			$this->db->query('update transaksis set status = 1 where id_transaksi ='.$id);
		}

		function acceptCancel($id){
			$this->db->query('update transaksis set status = 3 where id_transaksi ='.$id);
		}

		function unAcceptCancel($id){
			$this->db->query('update transaksis set status = 0 where id_transaksi ='.$id);
		}

	}
?>