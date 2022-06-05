<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
	}

	public function index()
	{

		check_not_login();

		$data['title'] = 'Dashboard';



		$this->template->load('template', 'dashboard', $data);
	}
}
