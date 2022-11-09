<?php 
class Keseimbangan_model extends CI_model{
	
	public function tambahDataKeseimbangan($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'storkstand' => $this->input->post('hslstork'),
			'tanggal' => time()
		];
		$this->db->insert('keseimbangan', $dataa);
	}


	public function getKeseimbanganById($id)
	{
		$this->db->select('keseimbangan.*, cabor.nama_cabor');
		$this->db->from('keseimbangan');
		$this->db->join('cabor', 'keseimbangan.idcabor = cabor.id');
		$this->db->where('keseimbangan.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getKeseimbanganString($id)
	{
		$this->db->select('*');
		$this->db->from('keseimbangan');
		$this->db->where('idatlet', $id);
		return $this->db->get()->row_array();
	}

	public function getCountKeseimbangan($id)
	{
		$query = $this->db->get_where('keseimbangan', ['idatlet' => $id]);
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
