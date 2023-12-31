<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posisi extends CI_Model {
	public function select_all() {
		$data = $this->db->get('kategori');

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM kategori WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kategori.nama AS kategori FROM pegawai, kategori WHERE pegawai.id_kategori = kategori.id AND pegawai.id_kategori={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO kategori VALUES('','" .$data['kategori'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kategori', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE kategori SET nama='" .$data['kategori'] ."' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM kategori WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('kategori');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('kategori');

		return $data->num_rows();
	}
}

/* End of file M_posisi.php */
/* Location: ./application/models/M_posisi.php */