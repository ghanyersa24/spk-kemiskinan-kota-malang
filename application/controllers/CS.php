<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CS extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cs');
	}

	public function individu()
	{
		$promethee = json_decode(file_get_contents(base_url() . "PROMETHEE/individu"))->data;
		$wp = json_decode(file_get_contents(base_url() . "WP/individu"))->data;
		$saw = json_decode(file_get_contents(base_url() . "SAW/individu"))->data;
		$data = [
			"METODE" => [
				"PROMETHEE" => [
					"ranking" => $ranking = CS_METHOD::rank($promethee->pa, 'promethee'),
					"pairwase" => $pairwase = CS_METHOD::pairwase($ranking),
				],
				"WP" => [
					"ranking" => $ranking2 = CS_METHOD::rank($wp->vektor_vi, 'wp'),
					"pairwase" => $pairwase2 = CS_METHOD::pairwase($ranking2)
				],
				"SAW" => [
					"ranking" => $ranking3 = CS_METHOD::rank($saw->vektor_v, 'saw'),
					"pairwase" => $pairwase3 = CS_METHOD::pairwase($ranking3)
				]
			],
			"PERHITUNGAN" => $perhitungan = CS_METHOD::perhitungan($pairwase, $pairwase2, $pairwase3),
			"PERANKINGAN" => CS_METHOD::perankingan($perhitungan)
		];
		success("data CS individu", $data);
	}

	public function keluarga()
	{
		$promethee = json_decode(file_get_contents(base_url() . "PROMETHEE/keluarga"))->data;
		$wp = json_decode(file_get_contents(base_url() . "WP/keluarga"))->data;
		$saw = json_decode(file_get_contents(base_url() . "SAW/keluarga"))->data;
		$data = [
			"METODE" => [
				"PROMETHEE" => [
					"ranking" => $ranking = CS_METHOD::rank($promethee->pa, 'promethee'),
					"pairwase" => $pairwase = CS_METHOD::pairwase($ranking),
				],
				"WP" => [
					"ranking" => $ranking2 = CS_METHOD::rank($wp->vektor_vi, 'wp'),
					"pairwase" => $pairwase2 = CS_METHOD::pairwase($ranking2)
				],
				"SAW" => [
					"ranking" => $ranking3 = CS_METHOD::rank($saw->vektor_v, 'saw'),
					"pairwase" => $pairwase3 = CS_METHOD::pairwase($ranking3)
				]
			],
			"PERHITUNGAN" => $perhitungan = CS_METHOD::perhitungan($pairwase, $pairwase2, $pairwase3),
			"PERANKINGAN" => CS_METHOD::perankingan($perhitungan)
		];
		success("data CS keluarga", $data);
	}
}


/* End of file CS.php */
/* Location: ./application/controllers/CS.php */
