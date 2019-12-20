<?php
/**
 *
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "Dashboard";
    $this->load->view('headfoot/header', $data);
    $this->load->view('dashboard');
    $this->load->view('headfoot/footer');
  }
}

 ?>
