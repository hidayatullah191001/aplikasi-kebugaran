<?php 
class DayaOtot_model extends CI_model{
	
	public function tambahDataDayaOtot($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'vertical_jump' => $this->input->post('hslvertical'),
			'standing' => $this->input->post('hslstanding'),
			'medicine_ball' => $this->input->post('hslmedicine'),
			'panjat_tambang' => $this->input->post('hslpanjat'),
			'tanggal' => time()
		];
		$this->db->insert('dayaotot', $dataa);
	}


	public function getDayaOtotById($id)
	{
		$this->db->select('dayaotot.*, cabor.nama_cabor');
		$this->db->from('dayaotot');
		$this->db->join('cabor', 'dayaotot.idcabor = cabor.id');
		$this->db->where('dayaotot.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getDayaOtotString($id)
	{
		$this->db->select('*');
		$this->db->from('dayaotot');
		$this->db->where('idatlet', $id);
		return $this->db->get()->row_array();
	}

	public function getCountDayaOtot($id)
	{
		$query = $this->db->get_where('dayaotot', ['idatlet' => $id]);
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
