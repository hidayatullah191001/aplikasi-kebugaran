<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email', 'role_id')) {
			$data = base_url();
			$this->session->unset_userdata('email', 'role_id');
			$this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Login terlebih dahulu!</div>');
			redirect($data);
		}
		$userdata = $this->session->userdata();
		if ($userdata['role_id'] != 2) {
			$data = base_url();
			$this->session->unset_userdata('email', 'role_id');
			$this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Login terlebih dahulu!</div>');
			redirect($data);
		}
		$this->load->library('form_validation');
		$this->load->model('Atlet_model');
	}

	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_user = $data['user']['id'];

		$this->form_validation->set_rules('nama', 'Nama', 'required',[
			'required' => 'Nama tidak boleh kosong!'
		]);

		$this->form_validation->set_rules('email', 'Email', 'required',[
			'required' => ' Email tidak boleh kosong!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Profile';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('user/index');
			$this->load->view('templates/footer', $data);
		}else{
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$prodi = $this->input->post('prodi');

			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|PNG';
				$config['max_size'] = '12048';
				$config['upload_path'] = './assets/assets/images/users/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image'))
				{
					$old_image = $data['user']['image'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/assets/images/users/'. $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('nama', $nama);
			$this->db->set('nim', $nim);
			$this->db->set('prodi', $prodi);
			$this->db->where('id', $id_user);
			$this->db->update('user');

			$this->session->set_flashdata('message', '
				<div class="alert alert-success text-success">Profile berhasil diperbarui!
				</div>');
			redirect('user');
		}
	}
}