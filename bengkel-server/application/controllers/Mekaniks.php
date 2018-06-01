<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class mekaniks
class Mekaniks extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data mekaniks
    function index_get() {
        //get berdasarkan id_mekanik
        $id_mekanik = $this->get('id_mekanik');
        if ($id_mekanik == '') {
            $mekaniks = $this->db->get('mekaniks')->result();
        } else {
            $this->db->where('id_mekanik', $id_mekanik);
            $mekaniks = $this->db->get('mekaniks')->result();
        }
        //hasil respon ketika ada
        $this->response($mekaniks, 200);
    }

    //untuk Mengirim atau menambah data mekaniks baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_mekanik'=>$this->post('id_mekanik'),
                'kode_mekanik'=>$this->post('kode_mekanik'),
                'nama_mekanik'=>$this->post('nama_mekanik'));

        //insert berdasarkan tabel mekaniks
        $insert = $this->db->insert('mekaniks', $data);
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
        //put berdasarkan id_mekanik
        $id_mekanik = $this->put('id_mekanik');
        //array berdasarkan attribut tabel
        $data = array(
                'id_mekanik'=>$this->put('id_mekanik'),
                'kode_mekanik'=>$this->put('kode_mekanik'),
                'nama_mekanik'=>$this->put('nama_mekanik'));
        //databasenya berdasarkan id_mekanik
        $this->db->where('id_mekanik', $id_mekanik);
        //pada update tabel mekaniks
        $update = $this->db->update('mekaniks', $data);
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
        //delete berdasarkan id_mekanik
        $id_mekanik = $this->delete('id_mekanik');
        //database berdasarkan id_mekanik
        $this->db->where('id_mekanik', $id_mekanik);
        //delete dari tabel
        $delete = $this->db->delete('mekaniks');
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