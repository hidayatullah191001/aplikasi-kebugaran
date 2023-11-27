<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlet extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email', 'role_id')) {
			$data = base_url();
			$this->session->unset_userdata('email', 'role_id');
			$this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Login terlebih dahulu!</div>');
			redirect($data);
		}
		$userdata = $this->session->userdata();
		if ($userdata['role_id'] != 2) {
			$data = base_url();
			$this->session->unset_userdata('email', 'role_id');
			$this->session->set_flashdata('message', '<div class = "alert alert-danger" role="alert">Login terlebih dahulu!</div>');
			redirect($data);
		}

		$this->load->model('Atlet_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Atlet';
		$data['atlet'] = $this->Atlet_model->getAllAtlet($data['user']['id']);
		if($this->input->post('keyword')){
			$data['atlet'] = $this->Atlet_model->cariDataAtlet();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('atlet/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Form Tambah Data Atlet';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('atlet/tambah');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Atlet_model->tambahDataAtlet($data['user']['id']);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
				Berhasil ditambahkan!
				</div>');
			redirect('atlet');
		}

	}

	public function hapus($id)
	{
		$this->Atlet_model->hapusDataAtlet($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">
				Berhasil dihapus!
				</div>');
		redirect('atlet');
	}

	public function detail($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Detail Data atlet';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('atlet/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Form Ubah Data Atlet';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('atlet/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Atlet_model->ubahDataAtlet();
			$this->session->set_flashdata('message', '<div class="alert alert-success">
				Berhasil diubah!
				</div>');
			redirect('atlet');
		}
	}
}

?> 