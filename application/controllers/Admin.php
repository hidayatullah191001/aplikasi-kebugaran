<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if ($userdata['role_id'] != 1) {
			$data = base_url();
			$this->session->unset_userdata('email', 'role_id');
			$this-> session ->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Login terlebih dahulu!</div>');
			redirect($data);
		}
		$this->load->model('Atlet_model', 'atlet');
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Home';
		$data['atlet'] = $this->atlet->getAllAtlet($data['user']['id']);
		$data['cabor'] = $this->db->get('cabor')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function user_management(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'User Management';
		$data['data_user'] = $this->db->get('user')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/user_management', $data);
		$this->load->view('templates/footer');
	}

	public function user_edit($id = null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_edit'] = $this->db->get_where('user', ['id' => $id])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required',[
			'required' => 'Nama tidak boleh kosong!'
		]);

		$this->form_validation->set_rules('email', 'Email', 'required',[
			'required' => ' Email tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('pwlama', 'Pwlama', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Edit Data User';		
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/edit_user', $data);
			$this->load->view('templates/footer', $data);
		}else{
			$role_input = $this->input->post('role');
			$this->User_model->updateUser();
			$this->session->set_flashdata('message', '
				<div class="alert alert-success">
				Data user berhasil diperbaharui!
				</div>');
			redirect('admin/user_management/');
		}
	}


	public function cabor(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Cabang Olahraga';
		$data['cabor'] = $this->db->get('cabor')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/cabor', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_cabor(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Cabang Olahraga';

		$this->form_validation->set_rules('nama', 'Nama Cabang Olahraga', 'required');

		if ($this->form_validation->run() == false) {
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/tambah_cabor', $data);
			$this->load->view('templates/footer');
		}else{
			$data = [
				'nama_cabor' => $this->input->post('nama'),
			];

			$this->db->insert('cabor', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
				Berhasil ditambahkan!
				</div>');
			redirect('admin/cabor');
		}
	}


	public function edit_cabor($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Cabang Olahraga';
		$data['cabor'] = $this->db->get_where('cabor', ['id' => $id])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Cabang Olahraga', 'required');

		if ($this->form_validation->run() == false) {
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/edit_cabor', $data);
			$this->load->view('templates/footer');
		}else{
			$nama_cabor = $this->input->post('nama');

			$this->db->set('nama_cabor', $nama_cabor);
			$this->db->where('id', $id);
			$this->db->update('cabor');
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
				Berhasil diubah!
				</div>');
			redirect('admin/cabor');
		}
	}

	public function hapus_cabor($id){
		$this->db->delete('cabor', ['id' =>$id]);
		$this->session->set_flashdata('message', '
			<div class="alert alert-success">
			Data cabang olahraga berhasil dihapus!
			</div>');
		redirect('admin/cabor/');
	}

	public function hapus_user($id){
		$this->db->delete('user', ['id' =>$id]);
		$this->session->set_flashdata('message', '
			<div class="alert alert-success">
			Data user berhasil dihapus!
			</div>');
		redirect('admin/user_management/');
	}
}