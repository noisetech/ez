<?php

class Fungsi
{

	protected $ci;

	function __construct()
	{
		$this->ci = &get_instance();
	}

	function pegawai()
	{
		$this->ci->load->model('ModelPegawai');
		// ini data sesion user id yang login
		$user_id = $this->ci->session->userdata('user_id');
		$user_data = $this->ci->ModelPegawai->nama_pegawai($user_id)->row();
		return $user_data;
	}


	function user_login()
	{
		$this->ci->load->model('ModelUser');
		// ini data sesion user id yang login
		$user_id = $this->ci->session->userdata('user_id');
		$user_data = $this->ci->ModelUser->get($user_id)->row();
		return $user_data;
	}
}