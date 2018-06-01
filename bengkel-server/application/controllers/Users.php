<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//memanggil libraries rest_controllernya
require APPPATH . '/libraries/REST_Controller.php';
//memanggil libraries rest_controllernya
use Restserver\Libraries\REST_Controller;

//membuat class users
class Users extends REST_Controller {

    //fungsi awal
    function __construct($config = 'rest') {
        parent::__construct($config);
        //manggil database
        $this->load->database();
    }

    //untuk Menampilkan data users
    function index_get() {
        //get berdasarkan id_user
        $id_user = $this->get('id_user');
        if ($id_user == '') {
            $users = $this->db->get('users')->result();
        } else {
            $this->db->where('id_user', $id_user);
            $users = $this->db->get('users')->result();
        }
        //hasil respon ketika ada
        $this->response($users, 200);
    }

    //untuk Mengirim atau menambah data users baru
    function index_post() {
        //post semua atributenya
        $data = array(
                'id_user'=>$this->post('id_user'),
                'username'=>$this->post('username'),
                'password'=>$this->post('password'),
                'jenis_user'=>$this->post('jenis_user'));

        //insert berdasarkan tabel users
        $insert = $this->db->insert('users', $data);
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
        //put berdasarkan id_user
        $id_user = $this->put('id_user');
        //array berdasarkan attribut tabel
        $data = array(
                'id_user'=>$this->put('id_user'),
                'username'=>$this->put('username'),
                'password'=>$this->put('password'),
                'jenis_user'=>$this->put('jenis_user'));
        //databasenya berdasarkan id_user
        $this->db->where('id_user', $id_user);
        //pada update tabel users
        $update = $this->db->update('users', $data);
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
        //delete berdasarkan id_user
        $id_user = $this->delete('id_user');
        //database berdasarkan id_user
        $this->db->where('id_user', $id_user);
        //delete dari tabel
        $delete = $this->db->delete('users');
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