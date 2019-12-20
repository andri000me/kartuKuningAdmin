<?php
/**
 *
 */
class Lowongan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
      $data['title'] = "Lowongan Kerja";
      $this->load->view('headfoot/header', $data);
      $data['lowongan'] = $this->db->query('SELECT* FROM lowongan_kerja')->result();
      $this->load->view('lowongan/lowongan-kerja', $data);
      $this->load->view('headfoot/footer');
  }

  public function FunctionName($value='')
  {
    // code...
  }
}

 ?>
