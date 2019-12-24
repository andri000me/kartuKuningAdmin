<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Papan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('name')){
            redirect('infront');
        }
    }

    function index() {
        $data['title'] = "Papan Informasi";
        $this->load->view('headfoot/header', $data);
        $data['papan'] = $this->db->query('SELECT * FROM informasi INNER JOIN kategori_informasi ON kat_informasi=id_informasi')->result();
        $data['kategori'] = $this->db->query('SELECT * FROM kategori_informasi')->result();
        $this->load->view('papan-informasi/papan-informasi', $data);
        $this->load->view('papan-informasi/papan-modal');
        $this->load->view('headfoot/footer');
    }

    function get_($id) {
        $result = $this->db->query("SELECT * FROM informasi WHERE id IN ('$id')")->row();
//         if (sizeof($result) > 0) {
            echo json_encode($result);
//         } else {
//             echo json_encode("No data");
//         }
    }

    function insert_papan() {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $kategori = $this->input->post('kategori');

        $id = $this->input->get('data');
        $mode = $this->input->get('mode');

        $dataInsert = array(
            'judul' => $judul,
            'isi' => $isi,
            'kat_informasi' => $kategori
        );

        if ($mode == 'add') {
            $this->models->insert('informasi', $dataInsert);
        } else {
            $where = array('id' => $id);
            $this->models->update('informasi', $dataInsert, $where);
        }
    }

    function delete($id) {
        $where = array('id' => $id);
        $this->models->delete('informasi', $where);
    }

}
