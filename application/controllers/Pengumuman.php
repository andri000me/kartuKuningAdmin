<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('name')) {
            redirect('infront');
        }
    }

    function index() {
        $data['title'] = "Pengumuman";
        $this->load->view('headfoot/header', $data);
        $data['lowongan'] = $this->db->query("SELECT * FROM news INNER JOIN kategori ON news.id_kategori=kategori.id_kategori WHERE news.id_kategori IN('2')")->result();
        $data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
        $this->load->view('pengumuman/pengumuman', $data);
        $this->load->view('pengumuman/pengumuman-modal');
        $this->load->view('headfoot/footer');
    }

}
