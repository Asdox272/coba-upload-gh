<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $dtSession = $this->session->userdata('username');
        $userData = $this->User->getDataUser($dtSession);
        if (empty($dtSession)) {
            redirect(base_url());
        } else {
            $this->load->view('home_view', ['data' => $userData]);
        }
    }

    public function Login()
    {
        $this->load->view('Login_view');
    }

    public function Register()
    {
        $this->load->view('Register_view');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User");
    }

    public function add_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');

        $arrInsert = array(
            'username' => $username,
            'password' => md5($password),
            'nama' => $nama,
        );

        $this->User->insertData($arrInsert);
        $this->session->set_flashdata('msg', '2');
        $this->load->view("login_view");
    }

    public function cekLoginUser()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
    
        $userData = $this->User->getLoginUser($username, $password);
    
        if ($userData !== false && isset($userData->username)) { // Periksa jika $userData bukan false dan memiliki properti 'username'
            $sess = array(
                'username' => $userData->username,
            );
            $this->session->set_userdata($sess);
            $this->load->view('home_view', compact('userData')); // Kirim $userData ke view
        } else {
            $this->session->set_flashdata('msg', '1');
            redirect(base_url());
        }
    }
    
}
