<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SAW extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['alternatif', 'saw']);
	}

	public function individu()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 1)->data;
		$response = [
			'alternatif' => $alternatif = SAW_METHOD::min_max('individu', ALTERNATIF::get('individu', $data)),
			'normalisasi' => $normalisasi = SAW_METHOD::normalisasi('individu', $alternatif),
			'vektor_v' => $vektor_v = SAW_METHOD::vektor_v('individu', $normalisasi)
		];
		success("data saw individu berhasil diterima", $response);
	}

	public function keluarga()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 2)->data;
		$response = [
			'alternatif' => $alternatif = SAW_METHOD::min_max('keluarga', ALTERNATIF::get('keluarga', $data)),
			'normalisasi' => $normalisasi = SAW_METHOD::normalisasi('keluarga', $alternatif),
			'vektor_v' => $vektor_v = SAW_METHOD::vektor_v('keluarga', $normalisasi)
		];
		success("data saw keluarga berhasil diterima", $response);
	}
}
