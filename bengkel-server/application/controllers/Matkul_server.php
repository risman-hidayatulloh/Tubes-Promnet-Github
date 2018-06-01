<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class matkul
class Matkul_server extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data matkul
    function index_get() {
        //get berdasarkan id
        $id = $this->get('id');
        if ($id == '') {
            $matkul = $this->db->get('matkul')->result();
        } else {
            $this->db->where('id', $id);
            $matkul = $this->db->get('matkul')->result();
        }
        //hasil respon ketika ada
        $this->response($matkul, 200);
    }

    //untuk Mengirim atau menambah data matkul baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id'=>$this->post('id'),
                'kode_mk'=>$this->post('kode_mk'),
                'nama_mk'=>$this->post('nama_mk'),
                'sks'=>$this->post('sks'),
                'semester'=>$this->post('semester'));

        //insert berdasarkan tabel matkul
        $insert = $this->db->insert('matkul', $data);
        if ($insert) {
            //respon ketika ada
            $this->response($data, 200);
        } else {
            //respon ketika tidak ada
            $this->response(array('status' => 'fail', 502));
        }
    }

    //untuk Memperbarui data kontak yang telah ada
    function index_put() {
        //put berdasarkan id
        $id = $this->put('id');
        //array berdasarkan attribut tabel
        $data = array(
                'id'=>$this->put('id'),
                'kode_mk'=>$this->put('kode_mk'),
                'nama_mk'=>$this->put('nama_mk'),
                'sks'=>$this->put('sks'),
                'semester'=>$this->put('semester'));
        //databasenya berdasarkan id
        $this->db->where('id', $id);
        //pada update tabel matkul
        $update = $this->db->update('matkul', $data);
        //respon ketika ada
        if ($update) {
            $this->response($data, 200);
        } else {
            //respon ketika tidak ada
            $this->response(array('status' => 'fail', 502));
        }
    }

    //untuk Menghapus salah satu data kontak
    function index_delete() {
        //delete berdasarkan id
        $id = $this->delete('id');
        //database berdasarkan id
        $this->db->where('id', $id);
        //delete dari tabel
        $delete = $this->db->delete('matkul');
        //respon ketika ada
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            //respon ketika tidak ada
            $this->response(array('status' => 'fail', 502));
        }
    }


}

?>