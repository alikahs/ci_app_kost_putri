<?php 

class KostPutri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KostPutri_model');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Kost Putri';

		$data['kost_putri'] = $this->KostPutri_model->getAllKostPutri();
		$this->load->view('templates/header', $data);
		$this->load->view('kost_putri/index', $data);
		$this->load->view('templates/footer');
	}
}