<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vote extends CI_Controller
{
	protected $table = "vote";
	public function __construct()
	{
		parent::__construct();
		// additional library
	}
	public function create()
	{
		$data = array(
			"id" => post('id', 'required'),
			"user_id" => 5
		);
		$find = DB_MODEL::find($this->table, $data);
		if (!$find->error) {
			$do = DB_MODEL::delete($this->table, $data);
			if (!$do->error)
				success("data vote dihapus", $do->data);
			else
				error("data vote dihapus");
		} else {
			$do = DB_MODEL::insert($this->table, $data);
			if (!$do->error) {
				success("data berhasil divote", $do->data);
			} else {
				error("data gagal divote");
			}
		}
	}
	public function get($type)
	{
		if ($type == 'individu')
			$get = json_decode(file_get_contents(base_url() . "cs/individu"))->data;
		else
			$get = json_decode(file_get_contents(base_url() . "cs/keluarga"))->data;
		$vote = DB_CUSTOM::vote();
		$my_vote = DB_MODEL::where($this->table, ['user_id' => 5]);
		for ($i = 0; $i < count($get->PERANKINGAN); $i++) {
			$same = false;
			$sum = false;
			foreach ($my_vote->data as $value) {
				$id = explode('.', $get->PERANKINGAN[$i]->id);
				if ($id[1] == $value->id) {
					$same = true;
				}
			}
			foreach ($vote->data as $value) {
				$id = explode('.', $get->PERANKINGAN[$i]->id);
				if ($id[1] == $value->id) {
					$get->PERANKINGAN[$i]->jumlah = (int) $value->vote;
					$sum = true;
				}
			}

			if ($same)
				$get->PERANKINGAN[$i]->vote = 1;
			else
				$get->PERANKINGAN[$i]->vote = 0;

			if (!$sum)
				$get->PERANKINGAN[$i]->jumlah = 0;
		}
		success("Data CS $type diterima", $get);
	}
}
