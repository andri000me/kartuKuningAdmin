<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('name')){
            redirect('infront');
        }
    }

    function index() {
        $data['title'] = "Berita";
        $this->load->view('headfoot/header', $data);
        $data['lowongan'] = $this->db->query("SELECT * FROM news INNER JOIN kategori ON news.id_kategori=kategori.id_kategori WHERE news.id_kategori IN('1')")->result();
        $data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
        $this->load->view('berita/berita', $data);
        $this->load->view('berita/berita-modal');
        $this->load->view('headfoot/footer');
    }

    public function get_($id) {
        $res = $this->db->query("SELECT * FROM news WHERE id_news IN ('$id')")->row();
        if (sizeof($res) > 0) {
            echo json_encode($res);
        } else {
            echo json_encode("No data");
        }
    }

    public function insert_berita() {
        $judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $isi = $this->input->post('isi');
        $judulSeo = strtolower(str_replace(" ", "-", $judul));
        
        $mode = $this->input->get("mode");
        $id = $this->input->get("data");

        $config['upload_path'] = './uploads/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $judulSeo;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photos')) {
            $meta = $this->upload->data();
            $dataInsert = array(
                'judul' => $judul,
                'isi' => $isi,
                'id_kategori' => $kategori,
                'fitur_photo' => $meta['file_name'],
                'added_by' => $this->session->userdata('name'),
                'judul_seo' => $judulSeo . ".html"
            );
        } else {
            $dataInsert = array(
                'judul' => $judul,
                'isi' => $isi,
                'id_kategori' => $kategori,
                'added_by' => $this->session->userdata('name'),
                'judul_seo' => $judulSeo . ".html"
            );
        }
        if ($mode == "add") {
            $this->models->insert('news', $dataInsert);
        } else {
            $where = array('id_news' => $id);
            $this->models->update('news', $dataInsert, $where);
        }
    }

    function hapus_berita($id) {
        $data = $this->db->query("SELECT * FROM news WHERE id_news IN ('$id')")->row();
        $where = array('id_news' => $id);
        $this->models->delete("news", $where);
        unlink('./uploads/news/' . $data->fitur_photo);
    }

}
