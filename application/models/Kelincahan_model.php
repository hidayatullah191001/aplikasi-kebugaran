<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kelincahan_model extends CI_model{
	
	public function tambahDataKelincahan($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'dodging' => $this->input->post('hsldodging'),
			'agility' => $this->input->post('hslagility'),
			'ttest' => $this->input->post('hslttest'),
			'illinois' => $this->input->post('hslillinois'),
			'tanggal' => time()
		];
		$this->db->insert('kelincahan', $dataa);
	}


	public function getKelincahanById($id)
	{
		$this->db->select('kelincahan.*, cabor.nama_cabor');
		$this->db->from('kelincahan');
		$this->db->join('cabor', 'kelincahan.idcabor = cabor.id');
		$this->db->where('kelincahan.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getKelincahanString($id)
	{
		$this->db->select('*');
		$this->db->from('kelincahan');
		$this->db->where('idatlet', $id);
		return $this->db->get()->row_array();
	}

	public function getCountKelincahan($id)
	{
		$query = $this->db->get_where('kelincahan', ['idatlet' => $id]);
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}

	public function hapusdatates($table, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}
}

?> 
