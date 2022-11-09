<?php 
class DayaTahan_model extends CI_model{
	
	public function tambahDataDayaTahan($id)
	{
		$dataa = [
			'idmahasiswa' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'multitahap' => $this->input->post('hslTesmulti'),
			'lari16km' => $this->input->post('hslLari16'),
			'lari300m' => $this->input->post('hslLari300'),
			'lari12menit' => $this->input->post('hslLari12'),
			'naikturunbangku' => $this->input->post('hslNaikturun'),
			'tanggal' => time()
		];
		$this->db->insert('dayatahan', $dataa);
	}


	public function getDayaTahanById($id)
	{
		$this->db->select('dayatahan.*, cabor.nama_cabor');
		$this->db->from('dayatahan');
		$this->db->join('cabor', 'dayatahan.idcabor = cabor.id');
		$this->db->where('dayatahan.idmahasiswa', $id);
		return $this->db->get()->result_array();
	}

	public function getDayaTahanString($id)
	{
		$this->db->select('*');
		$this->db->from('dayatahan');
		$this->db->where('idmahasiswa', $id);
		return $this->db->get()->row_array();
	}

	public function getCountDayaTahan($id)
	{
		$query = $this->db->get_where('dayatahan', ['idmahasiswa' => $id]);
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
