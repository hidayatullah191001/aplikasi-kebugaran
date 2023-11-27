<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Kecepatan_model extends CI_model{
	
	public function tambahDataKecepatan($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'lari30' => $this->input->post('hsllari30'),
			'lari50' => $this->input->post('hsllari50'),
			'tanggal' => time()
		];
		$this->db->insert('kecepatan', $dataa);
	}


	public function getKecepatanById($id)
	{
		$this->db->select('kecepatan.*, cabor.nama_cabor');
		$this->db->from('kecepatan');
		$this->db->join('cabor', 'kecepatan.idcabor = cabor.id');
		$this->db->where('kecepatan.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getKecepatanString($id)
	{
		$this->db->select('*');
		$this->db->from('kecepatan');
		$this->db->where('idatlet', $id);
		return $this->db->get()->row_array();
	}

	public function getCountKecepatan($id)
	{
		$query = $this->db->get_where('kecepatan', ['idatlet' => $id]);
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
