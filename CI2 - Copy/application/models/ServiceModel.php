<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ServiceModel extends CI_Model {
		

		function __construct(){
			parent::__construct();
		}

		
		public function addTmp($data){
			$this->db->insert('tmp_pelanggan',$data);
		}

		public function getTmp(){
			$this->db->distinct('*');
			$this->db->from('tmp_pelanggan');
			return $this->db->get();
		}

		public function truncateTmp(){
			$this->db->query('truncate table tmp_pelanggan');
		}

		public function getService(){
			return $this->db->query('select *from transaksis,detail_transaksi where transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part > 10');
		}

		public function getServiceFiltered($filter){
			return $this->db->query('select *from transaksis,detail_transaksi where transaksis.id_transaksi = detail_transaksi.id_transaksi and detail_transaksi.id_part > 10 group by ' .$filter.'(waktu)');
		}

	}
	


 ?>