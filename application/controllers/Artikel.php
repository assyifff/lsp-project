<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
	}

    public function index() {
        $data['artikels'] = $this->M_pegawai->select_all_publish();

        $this->load->view('landing_page', $data);
    }


}
