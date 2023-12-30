<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataPegawai'] = $this->M_pegawai->select_all();
		$data['dataPosisi'] = $this->M_posisi->select_all();

		$data['page'] = "pegawai";
		$data['judul'] = "Kelola Artikel";
		$data['deskripsi'] = "JeWePe";

		$data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

		$this->template->views('pegawai/home', $data);
	}

	public function tampil() {
		$data['dataPegawai'] = $this->M_pegawai->select_all();
		$this->load->view('pegawai/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'trim|required');
		$this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'trim|required');
		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');
		$this->form_validation->set_rules('status_publish', 'Status Publish', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Artikel Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Artikel Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}
	  

	public function update() {
		$id = trim($_POST['id']);

		$data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_pegawai', 'update-pegawai', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'trim|required');
		$this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'trim|required');
		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim|required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');
		$this->form_validation->set_rules('status_publish', 'Status Publish', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pegawai->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Artikel Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Artikel Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_pegawai->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Pegawai Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pegawai Gagal dihapus', '20px');
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */