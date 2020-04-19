<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WP_METHOD
{
	private static function format($value)
	{
		return $value;
	}
	public static function bobot($type)
	{
		$bobot = DB_CUSTOM::bobot($type)->data;
		foreach ($bobot as $json) {
			$json->bobot_indikator = self::format($json->bobot_indikator / 100);
			$json->kriteria = json_decode($json->kriteria);
			foreach ($json->kriteria as $json_sub) {
				unset($json_sub->sub_kriteria);
				$json_sub->bobot_kriteria = self::format($json_sub->bobot_kriteria / 100);
			}
		}
		return $bobot;
	}
	public static function vektor_si($type, $bobot, $alternatif)
	{
		$vektor_si = array();
		$total = 0;
		if ($type == 'individu') {
			foreach ($alternatif as $value) {
				$vektor_si['nilai'][] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'ekonomi' => $ekonomi = self::format(pow($value['ekonomi'], (-1) * $bobot[2]->bobot_indikator)),
					'kesehatan' => $kesehatan = self::format(pow($value['kesehatan'], $bobot[0]->bobot_indikator)),
					'pendidikan' => $pendidikan = self::format(pow($value['pendidikan'], (-1) * $bobot[1]->bobot_indikator)),
					's' => $temp = $ekonomi * $kesehatan * $pendidikan
				];
				$total += $temp;
			}
			$vektor_si['total'] = $total;
		} else {
			foreach ($alternatif as $value) {
				$vektor_si['nilai'][] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'perumahan' => $perumahan = self::format(pow($value['perumahan'], (-1) * $bobot[0]->bobot_indikator)),
					'asset' => $asset = self::format(pow($value['asset'], (-1) * $bobot[1]->bobot_indikator)),
					's' => $temp = $perumahan * $asset
				];
				$total += $temp;
			}
			$vektor_si['total'] = $total;
		}
		return $vektor_si;
	}
	public static function vektor_vi($vektor_si, $total)
	{
		$vektor_vi = [];
		foreach ($vektor_si as  $value) {
			$vektor_vi[] = [
				'id' => $value['id'],
				'nama' => $value['nama'],
				'hasil' => self::format($value['s'] / $total)
			];
		}
		return $vektor_vi;
	}
}
