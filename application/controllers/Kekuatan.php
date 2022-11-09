<?php  

class Kekuatan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->model('Kekuatan_model', 'kekuatan');
		$this->load->library('form_validation');
	}

	public function uji($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tes Kekuatan';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);
		$data['kekuatan'] = $this->kekuatan->getKekuatanById($id);
		$data['count'] = $this->kekuatan->getCountKekuatan($id);
		$data['cabor'] = $this->db->get('cabor')->result_array();

		$this->form_validation->set_rules('cabor', 'Cabang Olahraga', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('tes/kekuatan', $data);
			$this->load->view('templates/footer');
		}else{
			$this->prosestambah($id);
		}

	}

	public function prosestambah($id){
		$this->kekuatan->tambahDataKekuatan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Tes Berhasil ditambahkan!
			</div>');
		redirect('kekuatan/uji/'.$id);
	}

	public function hapusdata($idatlet, $id){

		$this->kekuatan->hapusdatates('kekuatan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Data tes berhasil dihapus!
			</div>');
		redirect('kekuatan/uji/'.$idatlet);
	}
}