<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		check_not_login();
		cek_admin();
		$this->load->library('form_validation');
		$this->load->model('ModelUser');
	}


	public function index()
	{

		$data['title'] = 'List User';
		$data['user'] = $this->ModelUser->get();


		$this->template->load('template', 'user/data', $data);
	}



	public function tambah()
	{

		$data['title'] = 'Tambah User';



		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');

		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]', [
				'matches' => '%s tidak sesuai dengan konfirmasi password'
			]);
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]', [
				'matches' => '%s tidak sesuai dengan password'
			]);
		}


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');


		$this->form_validation->set_message('required', '%s masih kosong silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');



		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {

			$this->template->load('template', 'user/tambah', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->ModelUser->addUser($post);
			$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
			return redirect('user');
		}
	}


	public function edit($id)
	{

		$data['title'] = 'Edit User';


		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_username_check');

		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]', [
				'matches' => '%s tidak sesuai dengan konfirmasi password'
			]);
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]', [
				'matches' => '%s tidak sesuai dengan password'
			]);
		}


		$this->form_validation->set_message('required', '%s masih kosong silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');


		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');


		if ($this->form_validation->run() == FALSE) {
			$query = $this->ModelUser->get($id);

			if ($query->num_rows() > 0) {
				$data['user'] = $query->row();



				// $query = $this->db->query("SELECT * FROM user WHERE username='$_POST[username]'");

				$this->template->load('template', 'user/edit', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan')</script>";
				echo "<script>window.location='" . site_url('user') . "'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);

			$this->ModelUser->edit($post);
			$this->session->set_flashdata('success', 'Data berhasil diubah');
			return redirect('user');
		}
	}

	// cek username selain id yang saat ini 
	// apakah sudah ada
	function username_check()
	{

		$post = $this->input->post(null, TRUE);

		$query = $this->db->query("SELECT * FROM user WHERE username='$post[username]' AND user_id !='$post[user_id]'");


		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
		// var_dump($query);
		// die;
	}



	public function delete($id)
	{
		$this->ModelUser->deleteUser($id);
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('/user');
	}
}
