<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function index() {
		$data['jml_pegawai'] 	= $this->M_artikel->total_rows();
		$data['userdata'] 		= $this->userdata;

		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "JeWePe";
		$this->template->views('home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */