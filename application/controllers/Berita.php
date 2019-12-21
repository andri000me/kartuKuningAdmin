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
    $data['lowongan'] = $this->db->query("SELECT * FROM news INNER JOIN kategori ON news.id_kategori=kategori.id_kategori WHERE news.id_kategori IN('1')")->result();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori")->result();
    $this->load->view('berita/berita', $data);
    $this->load->view('headfoot/footer');
    $this->load->view('berita/berita_modal');
  }

  public function get_berita($id)
  {
    $res = $this->db->query("SELECT * FROM news WHERE id_news IN ('$id')")->row();
    if(sizeof($res) > 0){
      echo json_encode($res);
    }else{
      echo json_encode("No data");
    }
  }
  public function insert_berita()
  {
    $judul = $this->input->post('judul');
    $kategori = $this->input->post('kategori');
    $isi = $this->input->post('isi');
    $judulSeo = strtolower(str_replace(" ", "-", $judul));

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']     = '0';
    $config['overwrite']     = 'true';
    $this->load->library('upload' , $config);

    if($this->upload->do_upload('photos')){
      $meta = $this->upload->data();
      $dataInsert = array(
        'judul' => $judul,
        'isi' => $isi,
        'kategori' => $kategori,
        'fitur_photo' => $meta['file_name'],
        'judul_seo' => $judul.".html"
      );
    }else{

    }

    $this->models->insert('news', $dataInsert);

  }

  function hapus_berita($id){
    $where = array('id_news' => $id);
    $this->models->delete("news", $where);
  }

}
