<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->model('Keseimbangan_model', 'keseimbangan');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = 'Aplikasi Tes Kebugaran';

		$this->load->view('templates/header_landing',$data);
		$this->load->view('landing/index', $data);
		$this->load->view('templates/footer_landing');
		
	}
}