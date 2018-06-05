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
			return $this->db->get();
		}

		function getFilterTransaksi($filter){
			return $this->db->query('select *from transaksis group by '.$filter.'(waktu)');
		}

	}
?>