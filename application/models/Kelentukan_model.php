<?php 
class Kelentukan_model extends CI_model{
	
	public function tambahDataKelentukan($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'sitandreach' => $this->input->post('hslsit'),
			'standingtrunk' => $this->input->post('hslstandingtrunk'),
			'tanggal' => time()
		];
		$this->db->insert('kelentukan', $dataa);
	}


	public function getKelentukanById($id)
	{
		$this->db->select('kelentukan.*, cabor.nama_cabor');
		$this->db->from('kelentukan');
		$this->db->join('cabor', 'kelentukan.idcabor = cabor.id');
		$this->db->where('kelentukan.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getKelentukanString($id)
	{
		$this->db->select('*');
		$this->db->from('kelentukan');
		$this->db->where('idatlet', $id);
		return $this->db->get()->row_array();
	}

	public function getCountKelentukan($id)
	{
		$query = $this->db->get_where('kelentukan', ['idatlet' => $id]);
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
