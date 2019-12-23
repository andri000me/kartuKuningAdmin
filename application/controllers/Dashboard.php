<?php

/**
 *
 */
class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('name')) {
            redirect('infront');
        }
    }

    public function index() {
        $data['title'] = "Dashboard";
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard');
        $this->load->view('headfoot/footer');
    }

}

?>
