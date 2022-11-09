<?php  

class Kelentukan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->model('Kelentukan_model', 'kelentukan');
		$this->load->library('form_validation');
	}

	public function uji($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tes Kelentukan';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);
		$data['kelentukan'] = $this->kelentukan->getKelentukanById($id);
		$data['count'] = $this->kelentukan->getCountKelentukan($id);
		$data['cabor'] = $this->db->get('cabor')->result_array();

		$this->form_validation->set_rules('cabor', 'Cabang Olahraga', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('tes/kelentukan', $data);
			$this->load->view('templates/footer');
		}else{
			$this->prosestambah($id);
		}
		
	}

	public function prosestambah($id){
		$this->kelentukan->tambahDataKelentukan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Tes Berhasil ditambahkan!
			</div>');
		redirect('kelentukan/uji/'.$id);
	}

	public function hapusdata($idatlet, $id){

		$this->kelentukan->hapusdatates('kelentukan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Data tes berhasil dihapus!
			</div>');
		redirect('kelentukan/uji/'.$idatlet);
	}
}