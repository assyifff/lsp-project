<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kategori');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataKategori'] = $this->M_kategori->select_all();

		$data['page'] 		= "posisi";
		$data['judul'] 		= "Data Kategori";
		$data['deskripsi'] 	= "JeWePe";

		$data['modal_tambah_posisi'] = show_my_modal('modals/modal_tambah_posisi', 'tambah-posisi', $data);

		$this->template->views('posisi/home', $data);
	}

	public function tampil() {
		$data['dataKategori'] = $this->M_kategori->select_all();
		$this->load->view('posisi/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_kategori->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Kategori Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Kategori Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['dataKategori'] = $this->M_kategori->select_by_id($id);

		echo show_my_modal('modals/modal_update_posisi', 'update-posisi', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_kategori->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Kategori Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Kategori Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_kategori->delete($id);
		
		if ($result > 0) {
			echo show_succ_msg('Kategori Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Kategori Gagal dihapus', '20px');
		}
	}
}

/* End of file Posisi.php */
/* Location: ./application/controllers/Posisi.php */