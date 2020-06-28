<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('logged_in')) {
			redirect('admin');
		}
	}
	public function index()
	{
		$this->load->view('admin/auth-login');
	}
}
