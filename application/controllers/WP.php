<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WP extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['alternatif', 'wp']);
	}

	public function individu()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 1)->data;
		$response = [
			'bobot' => $bobot = WP_METHOD::bobot('individu'),
			'alternatif' => $alternatif = ALTERNATIF::get('individu', $data),
			'vektor_si' => $vektor_si = WP_METHOD::vektor_si('individu', $bobot, $alternatif['nilai']),
			'vektor_vi' => $vektor_vi = WP_METHOD::vektor_vi($vektor_si['nilai'], $vektor_si['total'])
		];
		success("data wp berhasil diterima", $response);
	}

	public function keluarga()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 2)->data;
		$response = [
			'bobot' => $bobot = WP_METHOD::bobot('keluarga'),
			'alternatif' => $alternatif = ALTERNATIF::get('keluarga', $data),
			'vektor_si' => $vektor_si = WP_METHOD::vektor_si('keluarga', $bobot, $alternatif['nilai']),
			'vektor_vi' => $vektor_vi = WP_METHOD::vektor_vi($vektor_si['nilai'], $vektor_si['total'])
		];
		success("data wp berhasil diterima", $response);
	}
}
