<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PROMETHEE extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['individu']);
	}

	public function individu()
	{
		$data = DB_CUSTOM::detail_alternatif(null, 1)->data;
		$response = [
			'alternatif' => $alternatif = INDIVIDU::alternatif($data),
			'konfersi' => $konfersi = INDIVIDU::konfersi($alternatif),
			'deviasi' => $deviasi = INDIVIDU::deviasi($konfersi),
			'preferensi' => $preferensi = INDIVIDU::preferensi($deviasi),
			'ip' => $ip = INDIVIDU::ip($preferensi, $alternatif['rerata']),
			'matrix' => $matrix = INDIVIDU::matrix($ip),
			'pr' => $pr = INDIVIDU::pr($matrix),
			'cr' => $cr = INDIVIDU::cr($pr),
			'pa' => INDIVIDU::pa($cr, $alternatif['nilai'])
		];
		success("data promethee berhasil diterima", $response);
	}
}


/* End of file PROMETHEE.php */
/* Location: ./application/controllers/PROMETHEE.php */
