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
		// $this->db->where('id', $id);
		$this->db->delete('kost_putri', ['id' => $id]);
	}

	public function getKostPutriById($id)
	{
		return $this->db->get_where('kost_putri', ['id' => $id])->row_array();
	}

	public function ubahDataKostPutri()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"kampus" => $this->input->post('kampus', true),
			"no_kamar" => $this->input->post('nokamar', true),
			"alamat" => $this->input->post('alamat', true),
			"no_hp" => $this->input->post('nohp', true),
			"keterangan_kost" => $this->input->post('keterangan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kost_putri', $data);
	}

	public function cariDataKostPutri()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('keterangan_kost', $keyword);
		$this->db->or_like('kampus', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get('kost_putri')->result_array();
	}
}