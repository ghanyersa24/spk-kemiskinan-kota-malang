<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries\REST_Controller.php';

class Formulir extends REST_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index_post(){
        $input = $this->input->post();
        $this->response($input, REST_Controller::HTTP_OK);
	}
}