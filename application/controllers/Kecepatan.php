<?php  

class Kecepatan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->model('Kecepatan_model', 'kecepatan');
		$this->load->library('form_validation');
	}

	public function uji($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tes Kecepatan';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);
		$data['kecepatan'] = $this->kecepatan->getKecepatanById($id);
		$data['count'] = $this->kecepatan->getCountKecepatan($id);
		$data['cabor'] = $this->db->get('cabor')->result_array();

		$this->form_validation->set_rules('cabor', 'Cabang Olahraga', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('tes/kecepatan', $data);
			$this->load->view('templates/footer');
		}else{
			$this->prosestambah($id);
		}
		
	}

	public function prosestambah($id){
		$this->kecepatan->tambahDataKecepatan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Tes Berhasil ditambahkan!
			</div>');
		redirect('kecepatan/uji/'.$id);
	}

	public function hapusdata($idatlet, $id){

		$this->kecepatan->hapusdatates('kecepatan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Data tes berhasil dihapus!
			</div>');
		redirect('kecepatan/uji/'.$idatlet);
	}
}