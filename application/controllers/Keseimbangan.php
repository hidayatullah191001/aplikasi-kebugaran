<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Keseimbangan extends CI_Controller 
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
		$this->load->model('Atlet_model');
		$this->load->model('Keseimbangan_model', 'keseimbangan');
		$this->load->library('form_validation');
	}

	public function uji($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tes keseimbangan';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);
		$data['keseimbangan'] = $this->keseimbangan->getKeseimbanganById($id);
		$data['count'] = $this->keseimbangan->getCountKeseimbangan($id);
		$data['cabor'] = $this->db->get_where('cabor', ['id_user' => $data['user']['id']])->result_array();

		$this->form_validation->set_rules('cabor', 'Cabang Olahraga', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('tes/keseimbangan', $data);
			$this->load->view('templates/footer');
		}else{
			$this->prosestambah($id);
		}
		
	}

	public function prosestambah($id){
		$this->keseimbangan->tambahDataKeseimbangan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Tes Berhasil ditambahkan!
			</div>');
		redirect('keseimbangan/uji/'.$id);
	}

	public function hapusdata($idatlet, $id){

		$this->keseimbangan->hapusdatates('keseimbangan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Data tes berhasil dihapus!
			</div>');
		redirect('keseimbangan/uji/'.$idatlet);
	}
}