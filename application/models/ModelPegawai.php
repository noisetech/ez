<?php



defined('BASEPATH') or exit('No direct script access allowed');

class ModelPegawai extends CI_Model
{
	public function get($id = null)
	{
		$this->db->select('pegawai.*, user.name as username, 
		jabatan.nama_jabatan as nama_jabatan');
		$this->db->from('pegawai');
		$this->db->join('user', 'user.user_id = pegawai.user_id', 'left');
		$this->db->join('jabatan', 'jabatan.jabatan_id = pegawai.jabatan_id', 'left');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();

		return $query;
	}

	// ini untuk nama pegawai saat login nantinya
	public function nama_pegawai($id = null)
	{
		$this->db->from('pegawai');
		if ($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();

		return $query;
	}

	public function getUserNotAdmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('level',  2);
		$this->db->where('status_akun', null);
		return 	$this->db->get()->result();
	}

	public function getAlJAbatan()
	{
		$this->db->select('*');
		$this->db->from('jabatan');
		return 	$this->db->get()->result();
	}


	public function addPegawai($post)
	{
		$post = $this->input->post(null, TRUE);
		$params['nip'] = $post['nip'];
		$params['nama'] = $post['nama'];
		$params['alamat'] = $post['alamat'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		$params['tanggal_lahir'] = $post['tanggal_lahir'];
		$params['tempat_lahir'] = $post['tempat_lahir'];
		$params['nomor_kontak'] = $post['nomor_kontak'];
		$params['user_id'] = $post['user_id'];
		$params['jabatan_id'] = $post['jabatan_id'];
		  
		$this->db->insert('pegawai', $params);
	}

	public function editPegawai($post)
	{
		$params['nip'] = $post['nip'];
		$params['nama'] = $post['nama'];
		$params['alamat'] = $post['alamat'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		$params['tanggal_lahir'] = $post['tanggal_lahir'];
		$params['tempat_lahir'] = $post['tempat_lahir'];
		$params['nomor_kontak'] = $post['nomor_kontak'];
		$params['user_id'] = $post['user_id'];

		$this->db->where('id', $post['id']);
		$this->db->update('pegawai', $params);
	}

	public function deletePegawai($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai');
	}
}

/* End of file ModelName.php */
