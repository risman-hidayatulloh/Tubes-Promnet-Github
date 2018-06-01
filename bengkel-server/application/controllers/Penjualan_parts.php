<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class penjualan_parts
class Penjualan_parts extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data penjualan_parts
    function index_get() {
        //get berdasarkan id_penjualan_part
        $id_penjualan_part = $this->get('id_penjualan_part');
        if ($id_penjualan_part == '') {
            $penjualan_parts = $this->db->get('penjualan_parts')->result();
        } else {
            $this->db->where('id_penjualan_part', $id_penjualan_part);
            $penjualan_parts = $this->db->get('penjualan_parts')->result();
        }
        //hasil respon ketika ada
        $this->response($penjualan_parts, 200);
    }

    //untuk Mengirim atau menambah data penjualan_parts baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_penjualan_part'=>$this->post('id_penjualan_part'),
                'id_transaksi'=>$this->post('id_transaksi'),
                'kode_penjualan'=>$this->post('kode_penjualan'),
                'total_harga_ref'=>$this->post('total_harga_ref'));

        //insert berdasarkan tabel penjualan_parts
        $insert = $this->db->insert('penjualan_parts', $data);
        if ($insert) {
            //respon ketika ada
            $this->response($data, 200);
        } else {
            //respon ketika tak ada
            $this->response(array('status' => 'fail', 502));
        }
    }

    //untuk Memperbarui data kontak yang telah ada
    function index_put() {
        //put berdasarkan id_penjualan_part
        $id_penjualan_part = $this->put('id_penjualan_part');
        //array berdasarkan attribut tabel
        $data = array(
                'id_penjualan_part'=>$this->put('id_penjualan_part'),
                'id_transaksi'=>$this->put('id_transaksi'),
                'kode_penjualan'=>$this->put('kode_penjualan'),
                'total_harga_ref'=>$this->put('total_harga_ref'));
        //databasenya berdasarkan id_penjualan_part
        $this->db->where('id_penjualan_part', $id_penjualan_part);
        //pada update tabel penjualan_parts
        $update = $this->db->update('penjualan_parts', $data);
        //respon ketika ada
        if ($update) {
            $this->response($data, 200);
        } else {
            //respon ketika tak ada
            $this->response(array('status' => 'fail', 502));
        }
    }

    //untuk Menghapus salah satu data kontak
    function index_delete() {
        //delete berdasarkan id_penjualan_part
        $id_penjualan_part = $this->delete('id_penjualan_part');
        //database berdasarkan id_penjualan_part
        $this->db->where('id_penjualan_part', $id_penjualan_part);
        //delete dari tabel
        $delete = $this->db->delete('penjualan_parts');
        //respon ketika ada
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            //respon ketika tak ada
            $this->response(array('status' => 'fail', 502));
        }
    }


}

?>