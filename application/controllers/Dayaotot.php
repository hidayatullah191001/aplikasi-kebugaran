<?php  

class Dayaotot extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Atlet_model');
		$this->load->model('DayaOtot_model', 'dayaotot');
		$this->load->library('form_validation');
	}

	public function uji($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tes Daya Otot';
		$data['atlet'] = $this->Atlet_model->getAtletById($id);
		$data['dayaotot'] = $this->dayaotot->getDayaOtotById($id);
		$data['count'] = $this->dayaotot->getCountDayaOtot($id);
		$data['cabor'] = $this->db->get('cabor')->result_array();

		$this->form_validation->set_rules('cabor', 'Cabang Olahraga', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar');
			$this->load->view('tes/dayaotot', $data);
			$this->load->view('templates/footer');
		}else{
			$this->prosestambah($id);
		}
		
	}

	public function prosestambah($id){
		$this->dayaotot->tambahDataDayaOtot($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Tes Berhasil ditambahkan!
			</div>');
		redirect('dayaotot/uji/'.$id);
	}

	public function hapusdata($idatlet, $id){

		$this->dayaotot->hapusdatates('dayaotot', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-success">
			Data tes berhasil dihapus!
			</div>');
		redirect('dayaotot/uji/'.$idatlet);
	}
}