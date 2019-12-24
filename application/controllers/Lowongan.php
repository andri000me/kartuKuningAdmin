<?php

/**
 *
 */
class Lowongan extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!$this->session->has_userdata('name')){
            redirect('infront');
        }
    }

    public function index() {
        $data['title'] = "Lowongan Kerja";
        $this->load->view('headfoot/header', $data);
        $data['lowongan'] = $this->db->query('SELECT* FROM lowongan_kerja')->result();
        $this->load->view('lowongan/lowongan-kerja', $data);
        $this->load->view('lowongan/lowongan-modal');
        $this->load->view('headfoot/footer');
    }

    public function get_($id) {
        $res = $this->db->query("SELECT * FROM lowongan_kerja WHERE id_lowongan IN ('$id')")->row();
//         if (sizeof($res) > 0) {
            echo json_encode($res);
//         } else {
//             echo json_encode("No data");
//         }
    }

    public function insert_lowker() {
        $judul = $this->input->post('judul');
        $posisi = $this->input->post('posisi');
        $isi = $this->input->post('isi');
        $judulSeo = strtolower(str_replace(" ", "-", $judul));

        $mode = $this->input->get("mode");
        $id = $this->input->get("data");

        $config['upload_path'] = './uploads/lowker/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = TRUE;
        $config['file_name'] = $judulSeo;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photos')) {
            $meta = $this->upload->data();
            $dataInsert = array(
                'judul' => $judul,
                'posisi' => $posisi,
                'isi_lowongan' => $isi,
                'added_by' => $this->session->userdata('name'),
                'judul_seo' => $judulSeo . ".html",
                'foto' => $meta['file_name'],
            );
        } else {
            $dataInsert = array(
                'judul' => $judul,
                'posisi' => $posisi,
                'isi_lowongan' => $isi,
                'judul_seo' => $judulSeo . ".html",
                'added_by' => $this->session->userdata('name')
            );
        }
        if ($mode == "add") {
            $this->models->insert('lowongan_kerja', $dataInsert);
        } else {
            $where = array('id_lowongan' => $id);
            $this->models->update('lowongan_kerja', $dataInsert, $where);
        }
    }

    function delete($id) {
        $data = $this->db->query("SELECT * FROM lowongan_kerja WHERE id_lowongan IN ('$id')")->row();
        $where = array('id_lowongan' => $id);
        $this->models->delete("lowongan_kerja", $where);
        unlink('./uploads/lowker/' . $data->foto);
    }

}

?>
