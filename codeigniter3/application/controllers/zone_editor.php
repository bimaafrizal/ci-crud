<?php
class zone_editor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Cek_login');
        if ($_SESSION['level'] != 'Editor') {
            redirect('login_18');
        }
    }

    public function index()
    {
        $this->load->view('admin/header2');
        $this->load->view('admin/sidebar');
        // $this->load->view('crudBerita/main');
        $this->load->view('admin/footer');
    }
}
