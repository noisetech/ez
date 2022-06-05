<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$data['title'] = 'Login';

		check_already_login();
		$this->load->view('login', $data);
	}


	public function register(){
		$data['title'] = 'Register';

		$this->load->view('register', $data);
	}

	public function proses_register(){
		$data = [
			'username' => $this->input->post('username'),
			'name' => $this->input->post('name'),
			'password' => sha1($this->input->post('password')),
			'level' => 2,
			'approve' => null
		];

		$this->db->insert('user', $data);

		return redirect('auth/login');
	}


	public function proses()
	{

		$post = $this->input->post(null, TRUE);
		// ketika ada nilai name login
		if (isset($_POST['login'])) {
			$this->load->model('ModelUser');
			$query = $this->ModelUser->proses_login($post);

			// jika ada data yang sama dengan data username dan sha1 password
			if ($query->num_rows() > 0) {
				$row = $query->row();

				$params = array(
					'user_id' => $row->user_id,
					'level' => $row->level
				);

				if ($row->level == 1) {
					// kalo berhasil login ke dashboard
					echo "<script>
				alert('Selamat, Login berhasil');
				window.location='" . site_url('dashboard') . "';
			</script>
			";

					$this->session->set_userdata($params);
				} else {
					if ($row->approve == 0) {
						echo "<script>
						alert('Gagal, Anda belum diizinkan login');
						window.location='" . site_url('auth/login') . "';
					</script>
					";
					} else {
						echo "<script>
						alert('Selamat, Login berhasil');
						window.location='" . site_url('dashboard') . "';
					</script>
					";

						$this->session->set_userdata($params);
					}
				}
			}
			// kalo gagal login
			else {
				echo "<script>
				alert('Gagal, Cek username dan password');
				window.location='" . site_url('auth/login') . "';
			</script>
			";
			}
		}
	}

	public function logout()
	{
		$params = array(
			'user_id',
			'level'
		);
		$this->session->unset_userdata($params);

		redirect('auth/login');
	}
}
