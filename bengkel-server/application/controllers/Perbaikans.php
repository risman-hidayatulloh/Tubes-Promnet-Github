<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class perbaikans
class Perbaikans extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data perbaikans
    function index_get() {
        //get berdasarkan id_perbaikan
        $id_perbaikan = $this->get('id_perbaikan');
        if ($id_perbaikan == '') {
            $perbaikans = $this->db->get('perbaikans')->result();
        } else {
            $this->db->where('id_perbaikan', $id_perbaikan);
            $perbaikans = $this->db->get('perbaikans')->result();
        }
        //hasil respon ketika ada
        $this->response($perbaikans, 200);
    }

    //untuk Mengirim atau menambah data perbaikans baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_perbaikan'=>$this->post('id_perbaikan'),
                'id_transaksi'=>$this->post('id_transaksi'),
                'kode_perbaikan'=>$this->post('kode_perbaikan'),
                'id_mekanik'=>$this->post('id_mekanik'),
                'total_harga_ref'=>$this->post('total_harga_ref'));

        //insert berdasarkan tabel perbaikans
        $insert = $this->db->insert('perbaikans', $data);
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
        //put berdasarkan id_perbaikan
        $id_perbaikan = $this->put('id_perbaikan');
        //array berdasarkan attribut tabel
        $data = array(
                'id_perbaikan'=>$this->put('id_perbaikan'),
                'id_transaksi'=>$this->put('id_transaksi'),
                'kode_perbaikan'=>$this->put('kode_perbaikan'),
                'id_mekanik'=>$this->put('id_mekanik'),
                'total_harga_ref'=>$this->put('total_harga_ref'));
        //databasenya berdasarkan id_perbaikan
        $this->db->where('id_perbaikan', $id_perbaikan);
        //pada update tabel perbaikans
        $update = $this->db->update('perbaikans', $data);
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
        //delete berdasarkan id_perbaikan
        $id_perbaikan = $this->delete('id_perbaikan');
        //database berdasarkan id_perbaikan
        $this->db->where('id_perbaikan', $id_perbaikan);
        //delete dari tabel
        $delete = $this->db->delete('perbaikans');
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