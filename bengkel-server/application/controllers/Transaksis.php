<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class transaksis
class Transaksis extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data transaksis
    function index_get() {
        //get berdasarkan id_transaksi
        $id_transaksi = $this->get('id_transaksi');
        if ($id_transaksi == '') {
            $transaksis = $this->db->get('transaksis')->result();
        } else {
            $this->db->where('id_transaksi', $id_transaksi);
            $transaksis = $this->db->get('transaksis')->result();
        }
        //hasil respon ketika ada
        $this->response($transaksis, 200);
    }

    //untuk Mengirim atau menambah data transaksis baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_transaksi'=>$this->post('id_transaksi'),
                'id_pelanggan'=>$this->post('id_pelanggan'),
                'kode_transaksi'=>$this->post('kode_transaksi'),
                'waktu'=>$this->post('waktu'),
                'bayar'=>$this->post('bayar'));

        //insert berdasarkan tabel transaksis
        $insert = $this->db->insert('transaksis', $data);
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
        //put berdasarkan id_transaksi
        $id_transaksi = $this->put('id_transaksi');
        //array berdasarkan attribut tabel
        $data = array(
                'id_transaksi'=>$this->put('id_transaksi'),
                'id_pelanggan'=>$this->put('id_pelanggan'),
                'kode_transaksi'=>$this->put('kode_transaksi'),
                'waktu'=>$this->put('waktu'),
                'bayar'=>$this->put('bayar'));
        //databasenya berdasarkan id_transaksi
        $this->db->where('id_transaksi', $id_transaksi);
        //pada update tabel transaksis
        $update = $this->db->update('transaksis', $data);
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
        //delete berdasarkan id_transaksi
        $id_transaksi = $this->delete('id_transaksi');
        //database berdasarkan id_transaksi
        $this->db->where('id_transaksi', $id_transaksi);
        //delete dari tabel
        $delete = $this->db->delete('transaksis');
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