<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

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
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Home';
		$data['atlet'] = $this->atlet->getAllAtlet();
		$data['cabor'] = $this->db->get('cabor')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
?>