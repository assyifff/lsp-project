	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_pegawai extends CI_Model {
		public function select_all_pegawai() {
			$sql = "SELECT * FROM pegawai";

			$data = $this->db->query($sql);

			return $data->result();
		}

		// for list data
		public function select_all() {
			$sql = "SELECT 
						pegawai.id AS id, 
						pegawai.nama_penulis AS penulis, 
						pegawai.judul_artikel AS judul, 
						pegawai.isi_artikel AS isi, 
						pegawai.status_publish AS status_publish,
						pegawai.status AS status, 
						posisi.nama AS posisi 
					FROM 
						pegawai
					JOIN 
						posisi ON pegawai.id_kategori = posisi.id";
		
			$data = $this->db->query($sql);
		
			return $data->result();
		}

		public function select_by_id($id) {
			$sql = "SELECT 
						pegawai.id AS id_pegawai, 
						pegawai.nama_penulis AS nama_penulis, 
						pegawai.id_kategori, 
						pegawai.judul_artikel AS judul, 
						pegawai.isi_artikel AS isi_artikel,
						pegawai.status_publish AS status_publish, 
						pegawai.status AS status,
						posisi.nama AS posisi 
					FROM 
						pegawai
					JOIN 
						posisi ON pegawai.id_kategori = posisi.id
					WHERE 
						pegawai.id = '{$id}'";
		
			$data = $this->db->query($sql);
		
			return $data->row();
		}	

		public function select_by_posisi($id) {
			$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_kategori = {$id}";

			$data = $this->db->query($sql);

			return $data->row();
		}


		public function update($data) {
			$sql = "UPDATE pegawai 
					SET 
						nama_penulis = '" . $data['nama_penulis'] . "',
						judul_artikel = '" . $data['judul_artikel'] . "',
						isi_artikel = '" . $data['isi_artikel'] . "',
						status_publish = '" . $data['status_publish'] . "',
						id_kategori = " . $data['posisi'] . "
					WHERE 
						id = '" . $data['id'] . "'";
			
			$this->db->query($sql);
		
			return $this->db->affected_rows();
		}
		

		public function delete($id) {
			$sql = "DELETE FROM pegawai WHERE id='" .$id ."'";

			$this->db->query($sql);

			return $this->db->affected_rows();
		}


		// public function insert($data) {
		// 	$id = md5(DATE('ymdhms') . rand());
		// 	// $thumbnailPath = $this->uploadThumbnail($data['thumbnail']); 
		
		// 	$sql = "INSERT INTO pegawai 
		// 			VALUES (
		// 				'{$id}',
		// 				'{$data['nama_penulis']}',
		// 				'{$data['judul_artikel']}',
		// 				'{$data['isi_artikel']}',
		// 				{$data['posisi']},
		// 				'publish',
		// 				1
		// 			)";
		
		// 	$this->db->query($sql);
		
		// 	return $this->db->affected_rows();
		// }

		// public function insert($data) {
		// 	$id = md5(DATE('ymdhms') . rand());
		// 	$sql = "INSERT INTO pegawai 
		// 			VALUES (
		// 				'{$id}',
		// 				'{$data['nama_penulis']}',
		// 				'{$data['judul_artikel']}',
		// 				'{$data['isi_artikel']}',
		// 				{$data['posisi']},
		// 				'publish',
		// 				1
		// 			)";
		 
		// 	$this->db->query($sql);
		 
		// 	// Log or display the database error
		// 	if ($this->db->error()) {
		// 	   log_message('error', 'Database error: ' . $this->db->error());
		// 	}
		 
		// 	return $this->db->affected_rows();
		//  }
		public function insert($data) {
			$id = md5(DATE('ymdhms') . rand());
			// $thumbnailPath = $this->uploadThumbnail($id);
		
			$sql = "INSERT INTO pegawai 
					VALUES (
						'{$id}',
						'{$data['nama_penulis']}',
						'{$data['judul_artikel']}',
						'{$data['isi_artikel']}',
						{$data['posisi']},
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
		 

		public function insert_draft($data) {
			$id = md5(DATE('ymdhms') . rand());
		  
			$sql = "INSERT INTO pegawai 
					VALUES (
					  '{$id}',
					  '{$data['nama_penulis']}',
					  '{$data['judul_artikel']}',
					  '{$data['isi_artikel']}',
					  {$data['posisi']},
					  'draft',
					  1
					)";
		  
			$this->db->query($sql);
		  
			return $this->db->affected_rows();
		  }
		  
		

		public function insert_batch($data) {
			$this->db->insert_batch('pegawai', $data);
			
			return $this->db->affected_rows();
		}

		public function check_nama($nama) {
			$this->db->where('nama', $nama);
			$data = $this->db->get('pegawai');

			return $data->num_rows();
		}

		public function total_rows() {
			$data = $this->db->get('pegawai');

			return $data->num_rows();
		}
	}

	/* End of file M_pegawai.php */
	/* Location: ./application/models/M_pegawai.php */