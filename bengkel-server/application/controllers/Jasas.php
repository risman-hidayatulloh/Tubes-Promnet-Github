<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class jasas
class Jasas extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data jasas
    function index_get() {
        //get berdasarkan id_jasa
        $id_jasa = $this->get('id_jasa');
        if ($id_jasa == '') {
            $jasas = $this->db->get('jasas')->result();
        } else {
            $this->db->where('id_jasa', $id_jasa);
            $jasas = $this->db->get('jasas')->result();
        }
        //hasil respon ketika ada
        $this->response($jasas, 200);
    }

    //untuk Mengirim atau menambah data jasas baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_jasa'=>$this->post('id_jasa'),
                'kode_jasa'=>$this->post('kode_jasa'),
                'nama_jasa'=>$this->post('nama_jasa'));

        //insert berdasarkan tabel jasas
        $insert = $this->db->insert('jasas', $data);
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
        //put berdasarkan id_jasa
        $id_jasa = $this->put('id_jasa');
        //array berdasarkan attribut tabel
        $data = array(
                'id_jasa'=>$this->put('id_jasa'),
                'kode_jasa'=>$this->put('kode_jasa'),
                'nama_jasa'=>$this->put('nama_jasa'));
        //databasenya berdasarkan id_jasa
        $this->db->where('id_jasa', $id_jasa);
        //pada update tabel jasas
        $update = $this->db->update('jasas', $data);
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
        //delete berdasarkan id_jasa
        $id_jasa = $this->delete('id_jasa');
        //database berdasarkan id_jasa
        $this->db->where('id_jasa', $id_jasa);
        //delete dari tabel
        $delete = $this->db->delete('jasas');
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