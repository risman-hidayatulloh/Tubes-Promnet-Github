<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class parts
class Parts extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data parts
    function index_get() {
        //get berdasarkan id_part
        $id_part = $this->get('id_part');
        if ($id_part == '') {
            $parts = $this->db->get('parts')->result();
        } else {
            $this->db->where('id_part', $id_part);
            $parts = $this->db->get('parts')->result();
        }
        //hasil respon ketika ada
        $this->response($parts, 200);
    }

    //untuk Mengirim atau menambah data parts baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_part'=>$this->post('id_part'),
                'kode_part'=>$this->post('kode_part'),
                'nama_part'=>$this->post('nama_part'));

        //insert berdasarkan tabel parts
        $insert = $this->db->insert('parts', $data);
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
        //put berdasarkan id_part
        $id_part = $this->put('id_part');
        //array berdasarkan attribut tabel
        $data = array(
                'id_part'=>$this->put('id_part'),
                'kode_part'=>$this->put('kode_part'),
                'nama_part'=>$this->put('nama_part'));
        //databasenya berdasarkan id_part
        $this->db->where('id_part', $id_part);
        //pada update tabel parts
        $update = $this->db->update('parts', $data);
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
        //delete berdasarkan id_part
        $id_part = $this->delete('id_part');
        //database berdasarkan id_part
        $this->db->where('id_part', $id_part);
        //delete dari tabel
        $delete = $this->db->delete('parts');
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