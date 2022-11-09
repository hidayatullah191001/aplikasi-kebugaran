<?php  

class Atlet extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Data Atlet';
		$data['atlet'] = $this->Atlet_model->getAllAtlet();
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
			$this->Atlet_model->tambahDataAtlet();
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