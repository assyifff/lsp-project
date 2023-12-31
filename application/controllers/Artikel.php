<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_artikel');
	}

    public function index() {
        $data['artikels'] = $this->M_artikel->select_all_publish();

        $this->load->view('landing_page', $data);
    }


}
