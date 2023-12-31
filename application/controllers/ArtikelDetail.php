<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelDetail extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_artikel');
	}

    public function index($id) {
        $data['artikel'] = $this->M_artikel->select_by_id($id); // Gantilah sesuai dengan nama model dan fungsi yang Anda miliki
        $this->load->view('detail_artikel', $data);
    }
}
