<?php



defined('BASEPATH') or exit('No direct script access allowed');

class ModelJabatan extends CI_Model
{
	public function get()
	{

		$bahan_jabatan =	$this->db->select('*')->from('jabatan')->get()->result_array();

		$jabatan = [];

		foreach ($bahan_jabatan as $key => $value) {
			$hasil_join =	$this->db->select('jabatan.jabatan_id,
			 jabatan.nama_jabatan, disposisi.nama_disposisi,
			  disposisi.disposisi_id')
				->from('jabatan')->join(
					'jabatan_disposisi',
					'jabatan.jabatan_id = jabatan_disposisi.jabatan_id'
				)
				->join(
					'disposisi',
					'disposisi.disposisi_id = jabatan_disposisi.disposisi_id'
				)
				->where(
					'jabatan.jabatan_id',
					$bahan_jabatan[$key]['jabatan_id']
				)
				->get()->result_array();
			$value['disposisies'] =  $hasil_join;
			$jabatan[] = $value;

			// echo '<pre>';
			// var_dump($jabatan);
			// echo '</pre>';
			// die;
		}

		return $jabatan;
	}

	public function getById($id)
	{

		$bahan_jabatan =	$this->db->select('*')->from('jabatan')->where('jabatan_id', $id)->get()->result_array();

		$jabatan = [];

		foreach ($bahan_jabatan as $key => $value) {
			$hasil_join =	$this->db->select('jabatan.jabatan_id, disposisi.nama_disposisi, disposisi.disposisi_id')
				->from('jabatan')->join('jabatan_disposisi', 'jabatan.jabatan_id = jabatan_disposisi.jabatan_id')
				->join('disposisi', 'disposisi.disposisi_id = jabatan_disposisi.disposisi_id')
				->where('jabatan.jabatan_id', $id)
				->get()->result_array();
			$value['disposisies'] =  $hasil_join;
			$jabatan[] = $value;
		}

		return $jabatan;
	}

	public function getAllDisposisi()
	{
		$this->db->select('*');
		$this->db->from('disposisi');
		return 	$this->db->get()->result_array();
	}

	public function addJabatan($post)
	{
		$post = $this->input->post(null, TRUE);
		$params['nama_jabatan'] = $post['nama_jabatan'];
		$this->db->insert('jabatan', $params);
		$jabatan_id = $this->db->insert_id();

		return $jabatan_id;
	}

	public function inputJabatanDisposisi($jabatan_id, $disposisi)
	{
		$this->db->insert(
			'jabatan_disposisi',
			array('jabatan_id' => $jabatan_id, 'disposisi_id' => $disposisi)
		);
	}

	public function hapusDataJabatanDisposisiLama($jabatan_id, $disposisi)
	{
		$this->db->where('jabatan_id', $jabatan_id);
		$this->db->delete('jabatan_disposisi');
	}


	public function editJabatan($post)
	{
		$params['nama_jabatan'] = $post['nama_jabatan'];

		$this->db->where('jabatan_id', $post['jabatan_id']);
		$this->db->update('jabatan', $params);

		$jabatan_id = $post['jabatan_id'];

		return $jabatan_id;
	}

	public function deleteJabatan($id)
	{
		// delete data jabatan_disposisi
		$this->db->where('jabatan_id', $id);
		$this->db->delete('jabatan_disposisi');

		// delete data jabatan by id
		$this->db->where('jabatan_id', $id);
		$this->db->delete('jabatan');
	}
}
		


/* End of file ModelName.php */
