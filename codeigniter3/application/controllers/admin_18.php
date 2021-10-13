<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_18 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $news = $this->Berita_model->data_berita();
        $data = array(
            'isi_berita' => $news,
        );

        $this->load->view('admin/header2');
        $this->load->view('admin/sidebar');
        $this->load->view('crudBerita/main', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_berita()
    {
        $this->load->view('admin/header2');
        $this->load->view('admin/sidebar');
        $this->load->view('crudBerita/tambahBerita');
        $this->load->view('admin/footer');
    }

    public function proses_tambah()
    {
        $judul_berita = $this->input->post('judul_berita');
        $isi_berita = $this->input->post('isi_berita');

        if (($judul_berita != '') and ($isi_berita != '')) {
            $data = [
                'title' => $judul_berita,
                'text' => $isi_berita,
            ];

            $this->Berita_model->tambah_berita($data);
            redirect('admin_18');
        } else {
            redirect('admin_18/tambah_berita');
        }
    }

    public function edit_berita($id)
    {
        $row = $this->Berita_model->ambil_data_id($id);

        if ($row) {
            $data = array(
                'id' => $row->id,
                'title' => $row->title,
                'text' => $row->text,
            );
        }
        $this->load->view('admin/header2');
        $this->load->view('admin/sidebar');
        $this->load->view('crudBerita/editBerita', $data);
        $this->load->view('admin/footer');
    }

    public function proses_edit()
    {
        $judul_berita = $this->input->post('judul_berita');
        $isi_berita = $this->input->post('isi_berita');

        if (($judul_berita != '') and ($isi_berita != '')) {
            $data = [
                'title' => $judul_berita,
                'text' => $isi_berita,
            ];

            $this->Berita_model->edit_berita($data);
            redirect('admin_18');
        } else {
            redirect('admin_18');
        }
    }

    public function hapus_berita($id)
    {
        $this->Berita_model->ambil_data_id($id);
        $this->Berita_model->delete($id);

        redirect('admin_18');
    }
}
