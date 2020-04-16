<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PROMETHEE extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['promethee']);
	}

	public function individu()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 1)->data;
		$response = [
			'alternatif' => $alternatif = PROMETHEE_METHOD::alternatif('individu', $data),
			'konfersi' => $konfersi = PROMETHEE_METHOD::konfersi('individu', $alternatif),
			'deviasi' => $deviasi = PROMETHEE_METHOD::deviasi('individu', $konfersi),
			'preferensi' => $preferensi = PROMETHEE_METHOD::preferensi('individu', $deviasi),
			'ip' => $ip = PROMETHEE_METHOD::ip('individu', $preferensi, $alternatif['rerata']),
			'matrix' => $matrix = PROMETHEE_METHOD::matrix($ip),
			'pr' => $pr = PROMETHEE_METHOD::pr($matrix),
			'cr' => $cr = PROMETHEE_METHOD::cr($pr),
			'pa' => PROMETHEE_METHOD::pa($cr, $alternatif['nilai'])
		];
		success("data promethee berhasil diterima", $response);
	}

	public function keluarga()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 2)->data;
		$response = [
			'alternatif' => $alternatif = PROMETHEE_METHOD::alternatif('keluarga', $data),
			'konfersi' => $konfersi = PROMETHEE_METHOD::konfersi('keluarga', $alternatif),
			'deviasi' => $deviasi = PROMETHEE_METHOD::deviasi('keluarga', $konfersi),
			'preferensi' => $preferensi = PROMETHEE_METHOD::preferensi('keluarga', $deviasi),
			'ip' => $ip = PROMETHEE_METHOD::ip('keluarga', $preferensi, $alternatif['rerata']),
			'matrix' => $matrix = PROMETHEE_METHOD::matrix($ip),
			'pr' => $pr = PROMETHEE_METHOD::pr($matrix),
			// 'cr' => $cr = PROMETHEE_METHOD::cr($pr),
			// 'pa' => PROMETHEE_METHOD::pa($cr, $alternatif['nilai'])
		];
		success("data promethee berhasil diterima", $response);
	}
}


/* End of file PROMETHEE.php */
/* Location: ./application/controllers/PROMETHEE.php */
