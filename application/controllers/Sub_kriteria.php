<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_kriteria extends CI_Controller
{
	protected $table = "sub_kriteria";
	public function __construct()
	{
		parent::__construct();
		// additional library
	}
	public function create()
	{
		$data = array(
			"sub_kriteria" => post('sub_kriteria', 'required|numberic'),
			"bobot_sub" => post('bobot_sub', 'required|numberic'),
			"kriteria_id" => post('kriteria_id', 'required|numberic'),
		);

		$do = DB_MODEL::insert($this->table, $data);
		if (!$do->error) {
			success("data berhasil ditambahkan", $do->data);
		} else {
			error("data gagal ditambahkan");
		}
	}

	public function get($id = null)
	{
		if (is_null($id)) {
			$do = DB_MODEL::all($this->table);
		} else {
			$do = DB_MODEL::find($this->table, array("id" => $id));
		}

		if (!$do->error)
			success("data berhasil ditemukan", $do->data);
		else
			error("data gagal ditemukan");
	}

	public function update()
	{
		$data = array(
			// "sub_kriteria" => post('sub_kriteria', 'required|numberic'),
			"bobot_sub" => post('bobot_sub', 'required|numberic'),
			// "kriteria_id" => post('kriteria_id', 'required|numberic'),
		);

		$where = array(
			"id" => post('id'),
		);

		$do = DB_MODEL::update($this->table, $where, $data);
		if (!$do->error)
			success("data berhasil diubah", $do->data);
		else
			error("data gagal diubah");
	}

	public function delete()
	{
		$where = array(
			"id" => post('id')
		);

		$do = DB_MODEL::delete($this->table, $where);
		if (!$do->error)
			success("data berhasil dihapus", $do->data);
		else
			error("data gagal dihapus");
	}
}
