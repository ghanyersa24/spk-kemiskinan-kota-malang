<?php

class Promethee extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('logged_in')) {
			redirect('login');
		}
	}

	public function index()
	{
		// load view admin/overview.php
		$this->load->view("admin/promethee");
	}
}
