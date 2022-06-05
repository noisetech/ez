<?php



defined('BASEPATH') or exit('No direct script access allowed');

class ModelDisposisi extends CI_Model
{
	public function get()
	{
		$this->db->select('*');
		$this->db->from('disposisi');
		return 	$this->db->get()->result_array();
	}

	public function addDisposisi($post)
	{
		$post = $this->input->post(null, TRUE);
		$paramas['nama_disposisi'] = $post['nama_disposisi'];
		$this->db->insert('disposisi', $paramas);
	}

	public function getById($id)
	{
	 $q =	$this->db->select('disposisi.*')->from('disposisi')->where('disposisi_id', $id)->get();

	 return $q->result_array();

	}


	public function deleteDisposisi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('disposisi');
	}
}

/* End of file ModelName.php */
