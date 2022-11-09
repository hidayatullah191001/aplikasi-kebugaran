<?php 
class Atlet_model extends CI_model{

	public function getAllAtlet()
	{
		return $query = $this->db->get('atlet')->result_array();
	} 
	
	public function tambahDataAtlet()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"usia" => $this->input->post('usia', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true)
		];
		$this->db->insert('atlet', $data);
	}

	public function hapusDataAtlet($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('atlet');
	}

	public function getAtletById($id)
	{
		return $this->db->get_where('atlet', ['id' => $id])->row_array();
	}

	public function ubahDataAtlet()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"usia" => $this->input->post('usia', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true)
		];
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('atlet', $data);
	}

	public function cariDataAtlet()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('atlet')->result_array();
	}
 }

 ?> 
