<?php


class login_18 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cek_login');
    }

    public function index()
    {
        $this->load->view('loginAdmin/login');
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        if ($email != '' && $password != '') {
            $row = $this->Cek_login->cek_user($email, $password);

            if ($row) {
                $data = array(
                    'user' => $row->user,
                    'level' => $row->level,

                );

                $this->session->set_userdata($data);
                // echo $_SESSION('user');
                if ($row->level == 'Admin') {
                    redirect('zone_admin');
                } elseif ($row->level == 'Editor') {
                    redirect('zone_editor');
                }
            } else {
                $data['pesan'] = 'user atau password yang anda masukan salah';
                $this->load->view('loginAdmin/login', $data);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_18');
    }
}
