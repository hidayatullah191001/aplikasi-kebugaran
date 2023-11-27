<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
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
                    $this->session->set_userdata($data);
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

    public function registration(){
        if($this->session->userdata('email') && $this->session->userdata('role_id') == 2){
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
            $email = htmlspecialchars($this->input->post('email', true));
            $nama = htmlspecialchars($this->input->post('name', true));
            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'role_id' => 2,
                'date_created' => time(),
                'is_active' => 0,
            ];
            $this->db->insert('user', $data);
            $this->emailsend($email, $nama);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-success">
                Akun kamu berhasil didaftarkan. Kami mengirimkan email masuk di inbox ataupun folder spam!
                </div>');
            redirect('auth');
        }
    }

    public function emailsend($emailUser, $nama){
        $to = $emailUser;
        $subject = "Aktivasi Akun Aplikasi Tes Kebugaran";
        $message = "Hai $nama, Terima kasih telah mendaftar akun kamu di aplikasi kami. Agar kamu bisa menggunakan aplikasi kami, maka kamu memerlukan untuk aktivasi akun kamu terlebih dahulu. Dan untuk aktivasi akun ini, kami meminta kamu untuk melakukan tranfer seikhlasnya ke Akun Gopay kami : +62 895-6323-12548. Jika kamu sudah melakukan pembayaran, harap untuk membalas email ini dengan melampirkan bukti tranfser. Setelah kami akan memproses akun kamu lebih lanjut agar bisa digunakan segera. Terima kasih atas perhatiannya, salam dari Admin Aplikasi Tes Kebugaran";

        $this->load->config('email');
        
        $from = $this->config->item('smtp_user');

        $this->email->set_newline("\r\n");
        $this->email->from($from, 'Admin Aplikasi Tes Kebugaran');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
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
