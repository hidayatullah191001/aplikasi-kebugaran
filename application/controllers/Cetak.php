<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller 
{
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
		$this->load->model('Atlet_model', 'atlet');
		$this->load->model('DayaTahan_model', 'dayatahan');
		$this->load->model('Kekuatan_model', 'kekuatan');
		$this->load->model('DayaOtot_model', 'dayaotot');
		$this->load->model('Kecepatan_model', 'kecepatan');
		$this->load->model('Kelentukan_model', 'kelentukan');
		$this->load->model('Kelincahan_model', 'kelincahan');
		$this->load->model('Keseimbangan_model', 'keseimbangan');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Cetak Data Tes Atlet';
		$data['atlet'] = $this->atlet->getAllAtlet($data['user']['id']);
		if($this->input->post('keyword')){
			$data['atlet'] = $this->atlet->cariDataAtlet();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('cetak/index', $data);
		$this->load->view('templates/footer');
	}

	public function prosescetak($id)
	{
		$data['atlet'] = $this->atlet->getAtletById($id);
		$data['dayatahan'] = $this->dayatahan->getDayaTahanById($id);
		$data['kekuatan'] = $this->kekuatan->getKekuatanById($id);
		$data['dayaotot'] = $this->dayaotot->getDayaOtotById($id);
		$data['kecepatan'] = $this->kecepatan->getKecepatanById($id);
		$data['kelentukan'] = $this->kelentukan->getKelentukanById($id);
		$data['kelincahan'] = $this->kelincahan->getKelincahanById($id);
		$data['keseimbangan'] = $this->keseimbangan->getKeseimbanganById($id);
		
		$nama = $data['atlet']['nama'];
		$this->load->library('pdfgenerator');
		$this->data['title_pdf'] = 'Tes Fisik Atlet';
		$file_pdf = 'Form Hasil Tes Fisik Atlet - '.$nama;
		$paper = 'A4';
		$orientation = "portrait";
		$html = $this->load->view('cetak/cetak',$data, true);	    
		$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
}