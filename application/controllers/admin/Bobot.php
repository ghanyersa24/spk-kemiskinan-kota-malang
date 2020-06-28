<?php

class Bobot extends CI_Controller
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
		$this->load->view("admin/bobot");
	}

	public function edit()
	{
		$this->load->view("admin/bobotedit");
	}

	public function edits($param)
	{
		$this->load->view("admin/boboteditdetail");
	}
}
