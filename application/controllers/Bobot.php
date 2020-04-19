<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bobot extends CI_Controller
{
	public function get($tujuan)
	{
		if ($tujuan == 'individu') {
			$do = DB_CUSTOM::bobot('individu');
		} else {
			$do = DB_CUSTOM::bobot('keluarga');
		}

		if (!$do->error) {
			foreach ($do->data as $json) {
				$json->kriteria = json_decode($json->kriteria);
				foreach ($json->kriteria as $json_sub) {
					$json_sub->sub_kriteria = json_decode($json_sub->sub_kriteria);
				}
			}
			success("data berhasil ditemukan", $do->data);
		} else
			error("data gagal ditemukan");
	}
}


/* End of file Bobot.php */
/* Location: ./application/controllers/Bobot.php */
