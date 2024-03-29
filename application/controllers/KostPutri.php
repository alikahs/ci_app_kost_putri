<?php 

class KostPutri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KostPutri_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Kost Putri';

		$data['kost_putri'] = $this->KostPutri_model->getAllKostPutri();
		if( $this->input->post('keyword') ) {
			$data['kost_putri'] = $this->KostPutri_model->cariDataKostPutri();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('kost_putri/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Kost Putri';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kampus', 'Kampus', 'required');
		$this->form_validation->set_rules('nokamar', 'No Kamar', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nohp', 'No Handphone', 'required|numeric');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('kost_putri/tambah');
			$this->load->view('templates/footer');
		}
		else {
			$this->KostPutri_model->tambahDataKostPutri();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('KostPutri');
		}
	}

	public function hapus($id)
	{
		$this->KostPutri_model->hapusDataKostPutri($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('KostPutri');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Kost Putri';
		$data['KostPutri'] = $this->KostPutri_model->getKostPutriById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('kost_putri/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Kost Putri';
		$data['KostPutri'] = $this->KostPutri_model->getKostPutriById($id);
		$data['keterangankost'] = ['Per Bulan', 'Per Tahun'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kampus', 'Kampus', 'required');
		$this->form_validation->set_rules('nokamar', 'No Kamar', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nohp', 'No Handphone', 'required|numeric');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('kost_putri/ubah', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->KostPutri_model->ubahDataKostPutri();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('KostPutri');
		}
	}
}