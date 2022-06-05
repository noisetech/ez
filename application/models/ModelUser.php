<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{

	public function proses_login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function addUser($post)
	{
		$post = $this->input->post(null, TRUE);
		$params['username'] = $post['username'];
		$params['password'] = sha1($post['password']);
		$params['name'] = $post['name'];
		$params['address'] = $post['address'];
		$params['level'] = $post['level'];

		$this->db->insert('user', $params);
	}

	public function edit($post)
	{
		$params['username'] = $post['username'];
		$params['name'] = $post['name'];
		if (!empty($post['password'])) {
			$params['password'] = sha1($post['password']);
		}
		$params['approve'] = $post['approve'];
		$params['level'] = $post['level'];

		$this->db->where('user_id', $post['user_id']);
		$this->db->update('user', $params);
	}

	public function deleteUser($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}

	public function get($id = null)
	{
		$this->db->from('user');
		
		if ($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}

/* End of file ModelName.php */
