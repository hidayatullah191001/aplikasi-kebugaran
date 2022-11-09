<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabor extends CI_Controller {

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
		$this->load->model('Atlet_model', 'atlet');
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Cabang Olahraga';
		$data['cabor'] = $this->db->get('cabor')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('cabor/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_cabor(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Cabang Olahraga';

		$this->form_validation->set_rules('nama', 'Nama Cabang Olahraga', 'required');

		if ($this->form_validation->run() == false) {
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('cabor/tambah_cabor', $data);
			$this->load->view('templates/footer');
		}else{
			$data = [
				'nama_cabor' => $this->input->post('nama'),
			];

			$this->db->insert('cabor', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
				Berhasil ditambahkan!
				</div>');
			redirect('cabor');
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
			$this->load->view('cabor/edit_cabor', $data);
			$this->load->view('templates/footer');
		}else{
			$nama_cabor = $this->input->post('nama');

			$this->db->set('nama_cabor', $nama_cabor);
			$this->db->where('id', $id);
			$this->db->update('cabor');
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
				Berhasil diubah!
				</div>');
			redirect('cabor');
		}
	}

	public function hapus_cabor($id){
		$this->db->delete('cabor', ['id' =>$id]);
		$this->session->set_flashdata('message', '
			<div class="alert alert-success">
			Data cabang olahraga berhasil dihapus!
			</div>');
		redirect('cabor');
	}
}