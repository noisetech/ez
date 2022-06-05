<?php


defined('BASEPATH') or exit('No direct script access allowed');

class ModelSuratKeluar extends CI_Model
{
	public function get()
	{
		$user_id = $this->session->userdata('user_id');
		$level_user = $this->session->userdata('level');


		if ($level_user == "1") {
			$this->db->select('surat_keluar.*');
			$this->db->from('surat_keluar');

			return	$this->db->get()->result_array();
		} else {
			$d_pegawai = 	$this->db->select('pegawai.id')
				->from('pegawai')->where('user_id', $user_id)->get()->row_array();
			$this->db->select('surat_keluar.*');
			$this->db->from('surat_keluar');
			$this->db->where('pegawai_id', $d_pegawai['id']);

			return	$this->db->get()->result_array();
		}
	}


	public function get_pegawai_by_user_login()
	{
		$user_id_by_login = $this->session->userdata('user_id');
		// cari pegawai
		$this->db->select('id');
		return	$this->db->get_where('pegawai', array('user_id' => $user_id_by_login))->row_array();
	}

	public function getById($id)
	{
		$q = 	$this->db->select('surat_keluar.*')
			->from('surat_keluar')
			->where('surat_keluar.surat_keluar_id', $id)
			->get();


		return $q->result_array();
	}


	
	public function data_laporan()
	{
		$this->db->select('surat_keluar.*');
		$this->db->from('surat_keluar');
		$this->db->where('created_at >=', $this->input->post('tanggal_awal'));
		$this->db->where('created_at <=', $this->input->post('tanggal_akhir'));


		return $this->db->get()->result_array();
	}
	
}

/* End of file ModelName.php */
