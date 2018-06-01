<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class pelanggans
class Pelanggans extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data pelanggans
    function index_get() {
        //get berdasarkan id_pelanggan
        $id_pelanggan = $this->get('id_pelanggan');
        if ($id_pelanggan == '') {
            $pelanggans = $this->db->get('pelanggans')->result();
        } else {
            $this->db->where('id_pelanggan', $id_pelanggan);
            $pelanggans = $this->db->get('pelanggans')->result();
        }
        //hasil respon ketika ada
        $this->response($pelanggans, 200);
    }

    //untuk Mengirim atau menambah data pelanggans baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_pelanggan'=>$this->post('id_pelanggan'),
                'kode_pelanggan'=>$this->post('kode_pelanggan'),
                'nama_pelanggan'=>$this->post('nama_pelanggan'),
                'alamat_pelanggan'=>$this->post('alamat_pelanggan'),
                'plat_nomor'=>$this->post('plat_nomor'),
                'no_stnk'=>$this->post('no_stnk'));

        //insert berdasarkan tabel pelanggans
        $insert = $this->db->insert('pelanggans', $data);
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
        //put berdasarkan id_pelanggan
        $id_pelanggan = $this->put('id_pelanggan');
        //array berdasarkan attribut tabel
        $data = array(
                'id_pelanggan'=>$this->put('id_pelanggan'),
                'kode_pelanggan'=>$this->put('kode_pelanggan'),
                'nama_pelanggan'=>$this->put('nama_pelanggan'),
                'alamat_pelanggan'=>$this->put('alamat_pelanggan'),
                'plat_nomor'=>$this->put('plat_nomor'),
                'no_stnk'=>$this->put('no_stnk'));
        //databasenya berdasarkan id_pelanggan
        $this->db->where('id_pelanggan', $id_pelanggan);
        //pada update tabel pelanggans
        $update = $this->db->update('pelanggans', $data);
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
        //delete berdasarkan id_pelanggan
        $id_pelanggan = $this->delete('id_pelanggan');
        //database berdasarkan id_pelanggan
        $this->db->where('id_pelanggan', $id_pelanggan);
        //delete dari tabel
        $delete = $this->db->delete('pelanggans');
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