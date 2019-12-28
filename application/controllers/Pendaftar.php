<?php

class Pendaftar extends CI_Controller {

    function index() {
        $data['title'] = "Pendaftar Kartu Kuning";
        $data['pendaftar'] = $this->db->query("SELECT * FROM pendaftaran")->result();
        $this->load->view('headfoot/header', $data);
        $this->load->view('pendaftar/pendaftar', $data);
        $this->load->view('headfoot/footer');
    }

    function detail_pendaftar($nik) {
        $data['detail'] = $this->db->query("SELECT *, provinsi.nama as provinsi, "
                        . "kabupaten.nama as kabupaten,  kecamatan.nama as kecamatan "
                        . "FROM pendaftaran INNER JOIN provinsi ON provinsi=provinsi.id_prov "
                        . "INNER JOIN kabupaten ON kabupaten=kabupaten.id_kab "
                        . "INNER JOIN kecamatan ON kecamatan=kecamatan.id_kec WHERE nik IN ('$nik')")->row();
        $this->load->view('pendaftar/detail-pendaftar', $data);
    }

    function aktivasi($nik) {
        $where = array('nik' => $nik);
        $dataUpdate = array('status_aktif' => 1);
        $this->models->update('pendaftaran', $dataUpdate, $where);
    }

    function get_provinsi($id) {
        echo  $this->db->query("SELECT * FROM provinsi WHERE id_prov IN ('$id')")->row()->nama;
    }

    function get_kabupaten($id) {
        echo $this->db->query("SELECT * FROM kabupaten WHERE id_kab IN ('$id')")->row()->nama;
    }

}
