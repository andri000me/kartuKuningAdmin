<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Papan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = "Papan Informasi";
    $this->load->view('headfoot/header', $data);
    $data['papan'] = $this->db->query('SELECT* FROM informasi INNER JOIN kategori_informasi ON kat_informasi=id_informasi')->result();
    $this->load->view('papan-informasi/papan-informasi', $data);
    $this->load->view('headfoot/footer');
  }

}
