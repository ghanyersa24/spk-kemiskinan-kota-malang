<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function index()
	{
		$username = post('username', 'required');
		$do = DB_MODEL::login('users', $username);
		if (is_null($do->data)) {
			error("username and password isn't match");
		} else {
			if (password_verify(post("password"), $do->data->password)) {
				$do->data->token = AUTHORIZATION::generateToken($do->data);
				$do->data->logged_in = true;
				$this->session->set_userdata((array) $do->data);
				success("Welcome to system", $do->data);
			} else
				error("username and password isn't match");
		}
	}
}
