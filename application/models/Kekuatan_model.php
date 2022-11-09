<?php 
class Kekuatan_model extends CI_model{
	
	public function tambahDataKekuatan($id)
	{
		$dataa = [
			'idatlet' => $id,
			'idcabor'=> $this->input->post('cabor'),
			'pushup' => $this->input->post('hslpushup'),
			'situp' => $this->input->post('hslsitup'),
			'pullup' => $this->input->post('hslpullup'),
			'GTKA' => $this->input->post('hslgtka'),
			'GTKI' => $this->input->post('hslgtki'),
			'tarikdorong' => $this->input->post('hsltarikdorong'),
			'punggung' => $this->input->post('hslpunggung'),
			'tungkai' => $this->input->post('hsltungkai'),
			'wallsquat' => $this->input->post('hslwallsquat'),
			'tanggal' => time()
		];
		$this->db->insert('kekuatan', $dataa);
	}


	public function getKekuatanById($id)
	{
		$this->db->select('kekuatan.*, cabor.nama_cabor');
		$this->db->from('kekuatan');
		$this->db->join('cabor', 'kekuatan.idcabor = cabor.id');
		$this->db->where('kekuatan.idatlet', $id);
		return $this->db->get()->result_array();
	}

	public function getKekuatanString($id)
	{
		$this->db->select('*');
		$this->db->from('kekuatan');
		$this->db->where('idmahasiswa', $id);
		return $this->db->get()->row_array();
	}

	public function getCountKekuatan($id)
	{
		$query = $this->db->get_where('kekuatan', ['idatlet' => $id]);
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
