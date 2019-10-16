<?php 

class KostPutri_model extends CI_model {
	public function getAllKostPutri()
	{
		return $this->db->get('kost_putri')->result_array();
		
	}
	public function tambahDataKostPutri()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"kampus" => $this->input->post('kampus', true),
			"no_kamar" => $this->input->post('nokamar', true),
			"alamat" => $this->input->post('alamat', true),
			"no_hp" => $this->input->post('nohp', true),
			"keterangan_kost" => $this->input->post('keterangan', true)
		];

		$this->db->insert('kost_putri', $data);
	}

	public function hapusDataKostPutri($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kost_putri');
	}
}