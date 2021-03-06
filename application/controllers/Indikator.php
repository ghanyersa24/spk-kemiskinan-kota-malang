<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator extends CI_Controller
{
	protected $table = "indikator";
	public function __construct()
	{
		parent::__construct();
		// additional library
	}
	public function create()
	{
		$data = array(
			"indikator" => post('indikator', 'required'),
			"bobot_indikator" => post('bobot_indikator', 'required|numberic'),
			"tujuan" => post('tujuan', 'required|enum:individu&keluarga'),
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
			// "indikator" => post('indikator', 'required'),
			"bobot_indikator" => post('bobot_indikator', 'required|numberic'),
			// "tujuan" => post('tujuan','required|enum:individu&keluarga'),
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
