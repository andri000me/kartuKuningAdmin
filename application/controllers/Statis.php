<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Statis
 *
 * @author Sigit Suryono
 */
class Statis extends CI_Controller {

    //put your code here

    function index() {
        $data['title'] = "Halaman Statis";
        $data['statis'] = $this->db->query("SELECT * FROM `halaman_statis`")->result();
        $this->load->view('headfoot/header', $data);
        $this->load->view('statis/statis');
        $this->load->view('statis/statis-modal');
        $this->load->view('headfoot/footer');
    }

    public function get_($id) {
        $res = $this->db->query("SELECT * FROM halaman_statis WHERE id IN ('$id')")->row();
//         if (sizeof($res) > 0) {
            echo json_encode($res);
//         } else {
//             echo json_encode("No data");
//         }
    }

    public function insert_statis() {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $isiModified = $this->etc->add_class_for_tag($isi, "img-fluid");
        $judulSeo = strtolower(str_replace(" ", "-", $judul));

        $mode = $this->input->get("mode");
        $id = $this->input->get("data");

        $dataInsert = array(
            'judul' => $judul,
            'isi' => $isiModified,
            'judul_seo' => $judulSeo . ".html"
        );

        if ($mode == "add") {
            $this->models->insert('halaman_statis', $dataInsert);
        } else {
            $where = array('id  ' => $id);
            $this->models->update('halaman_statis', $dataInsert, $where);
        }
    }

    function delete($id) {
        $data = $this->db->query("SELECT * FROM halaman_statis WHERE id IN ('$id')")->row();
        $where = array('id' => $id);
        $this->models->delete("halaman_statis", $where);
        unlink('./uploads/news/' . $data->fitur_photo);
    }

}
