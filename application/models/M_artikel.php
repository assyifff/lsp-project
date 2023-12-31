	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_artikel extends CI_Model {
		public function select_all_publish() {
			$sql = "SELECT * FROM artikel WHERE status_publish = 'publish'";

			$data = $this->db->query($sql);

			return $data->result();
		}

		// for list data
		public function select_all() {
			$sql = "SELECT 
						artikel.id AS id, 
						artikel.nama_penulis AS penulis, 
						artikel.judul_artikel AS judul, 
						artikel.isi_artikel AS isi, 
						artikel.status_publish AS status_publish,
						artikel.status AS status, 
						kategori.nama AS kategori 
					FROM 
						artikel
					JOIN 
						kategori ON artikel.id_kategori = kategori.id";
		
			$data = $this->db->query($sql);
		
			return $data->result();
		}

		public function select_by_id($id) {
			$sql = "SELECT 
						artikel.id AS id, 
						artikel.nama_penulis AS nama_penulis, 
						artikel.id_kategori, 
						artikel.judul_artikel AS judul, 
						artikel.isi_artikel AS isi_artikel,
						artikel.status_publish AS status_publish, 
						artikel.status AS status,
						kategori.nama AS kategori 
					FROM 
						artikel
					JOIN 
						kategori ON artikel.id_kategori = kategori.id
					WHERE 
						artikel.id = '{$id}'";
		
			$data = $this->db->query($sql);
		
			return $data->row();
		}	

		public function select_by_kategori($id) {
			$sql = "SELECT COUNT(*) AS jml FROM artikel WHERE id_kategori = {$id}";

			$data = $this->db->query($sql);

			return $data->row();
		}


		public function update($data) {
			$sql = "UPDATE artikel 
					SET 
						nama_penulis = '" . $data['nama_penulis'] . "',
						judul_artikel = '" . $data['judul_artikel'] . "',
						isi_artikel = '" . $data['isi_artikel'] . "',
						status_publish = '" . $data['status_publish'] . "',
						id_kategori = " . $data['kategori'] . "
					WHERE 
						id = '" . $data['id'] . "'";
			
			$this->db->query($sql);
		
			return $this->db->affected_rows();
		}
		

		public function delete($id) {
			$sql = "DELETE FROM artikel WHERE id='" .$id ."'";

			$this->db->query($sql);

			return $this->db->affected_rows();
		}

		public function insert($data) {
			$id = md5(DATE('ymdhms') . rand());
			// $thumbnailPath = $this->uploadThumbnail($id);
		
			$sql = "INSERT INTO artikel 
					VALUES (
						'{$id}',
						'{$data['nama_penulis']}',
						'{$data['judul_artikel']}',
						'{$data['isi_artikel']}',
						{$data['kategori']},
						1,
						'{$data['status_publish']}'
					)";
		
			$this->db->query($sql);
		
			return $this->db->affected_rows();
		}

		
		
		private function uploadThumbnail($id) {
			// Menggunakan folder uploads sebagai contoh. Sesuaikan dengan kebutuhan Anda.
			$uploadDirectory = 'assets/img/';
			$thumbnailPath = $uploadDirectory . $id . '.png'; // Ubah ekstensi sesuai dengan jenis thumbnail
		
			move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnailPath);
		
			return $thumbnailPath;
		}
		

		public function insert_batch($data) {
			$this->db->insert_batch('artikel', $data);
			
			return $this->db->affected_rows();
		}

		public function check_nama($nama) {
			$this->db->where('nama', $nama);
			$data = $this->db->get('artikel');

			return $data->num_rows();
		}

		public function total_rows() {
			$data = $this->db->get('artikel');

			return $data->num_rows();
		}
	}

	/* End of file M_artikel.php */
	/* Location: ./application/models/M_artikel.php */