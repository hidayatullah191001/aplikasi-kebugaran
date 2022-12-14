<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        
        if($this->session->userdata('email') && $this->session->userdata('role_id') == 2)
        {
            redirect('home');
        }else if($this->session->userdata('email') && $this->session->userdata('role_id') == 1){
            redirect('admin');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this-> input ->post('email');
        $password = $this-> input ->post('password');

        $user = $this->db->get_where('user', ['email'=> $email])->row_array();

        if($user)
        {
            if($user['is_active']==1){
                // cek password
                if (password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user ['email'],
                        'role_id' => $user ['role_id']
                    ];
                    $this -> session -> set_userdata($data);
                    if ($user['role_id'] == 1){
                        redirect('admin');
                    }else if($user['role_id'] == 2){
                        redirect('home');
                    }
                }else{
                    $this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert"> Password anda salah</div>');
                    redirect('auth');                       
                }
                
            }else{
                $this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert"> Email anda belum diaktivasi. Hubungi admin untuk meminta aktivasi akun!</div>');
                redirect('auth');
            }

        }else{
            $this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert"> Email tidak terdaftar! </div>');
            redirect('auth');
        }
    }

	public function registration()
    {
         if($this->session->userdata('email') && $this->session->userdata('role_id') == 2)
        {
            redirect('home');
        }else if($this->session->userdata('email') && $this->session->userdata('role_id') == 1){
            redirect('admin');

        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short (min 8)!'
        ]);
        $this->form_validation->set_rules('password1', 'Passoword', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'role_id' => 2,
                'date_created' => time(),
                'is_active' => 0,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-success">
                Congratulation! your account has been crated. Please Login!
                </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil keluar! </div>');
        redirect('auth');
    }
}
