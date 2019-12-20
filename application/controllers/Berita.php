<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = "Berita";
    $this->load->view('headfoot/header', $data);
    $data['lowongan'] = $this->db->query("SELECT* FROM news INNER JOIN kategori ON news.id_kategori=kategori.id_kategori WHERE news.id_kategori IN('1')")->result();
    $this->load->view('berita/berita', $data);
    $this->load->view('headfoot/footer');
  }

}
