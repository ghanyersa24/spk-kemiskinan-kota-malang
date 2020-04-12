<?php
defined('BASEPATH') or exit('No direct script access allowed');
class INDIVIDU
{
	public static function alternatif($data)
	{
		$bobot = DB_CUSTOM::bobot('individu')->data;
		foreach ($bobot as $json) {
			$json->kriteria = json_decode($json->kriteria);
			foreach ($json->kriteria as $json_sub) {
				$json_sub->sub_kriteria = json_decode($json_sub->sub_kriteria);
			}
		}
		for ($i = 0; $i < count($data); $i++) {
			$alternatif['nilai'][] = array(
				"id" => "A" . $data[$i]->id_Survey,
				"nama" => $data[$i]->Nama,
				"ekonomi" => self::ekonomi('alternatif', $data[$i], $bobot[2]),
				"kesehatan" => self::kesehatan('alternatif', $data[$i], $bobot[0]),
				"pendidikan" => self::pendidikan('alternatif', $data[$i], $bobot[1]),
			);
		}
		$ekonomi = $kesehatan = $pendidikan = 0;
		foreach ($alternatif['nilai'] as $value) {
			$ekonomi += $value['ekonomi'];
			$kesehatan += $value['kesehatan'];
			$pendidikan += $value['pendidikan'];
		}
		$alternatif['rerata'] = [
			"ekonomi" => $ekonomi / count($alternatif['nilai']),
			"kesehatan" => $kesehatan / count($alternatif['nilai']),
			"pendidikan" => $pendidikan / count($alternatif['nilai'])
		];
		return $alternatif;
	}

	public static function konfersi($data)
	{
		foreach ($data['nilai'] as $value) {
			if (!isset($value['rerata']))
				$konfersi[] = array(
					"id" => $value['id'],
					"nama" => $value['nama'],
					"ekonomi" => self::ekonomi('konfersi', $value['ekonomi'], null),
					"kesehatan" => self::kesehatan('konfersi', $value['kesehatan'], null),
					"pendidikan" => self::pendidikan('konfersi', $value['pendidikan'], null),
				);
		}
		return $konfersi;
	}

	public static function deviasi($data)
	{
		for ($i = 0; $i < count($data); $i++) {
			for ($j = 0; $j < count($data); $j++) {
				$deviasi[] = [
					"id" => $data[$i]['id'] . "," . $data[$j]['id'],
					"ekonomi" => $data[$i]['ekonomi'] - $data[$j]['ekonomi'],
					"kesehatan" => $data[$i]['kesehatan'] - $data[$j]['kesehatan'],
					"pendidikan" => $data[$i]['pendidikan'] - $data[$j]['pendidikan'],
				];
			}
		}
		return $deviasi;
	}

	public static function preferensi($data)
	{
		for ($i = 0; $i < count($data); $i++) {
			$preferensi[] = [
				"id" => $data[$i]['id'],
				"ekonomi" => $data[$i]['ekonomi'] <= 0 ? 0.00 : 1.00,
				"kesehatan" => $data[$i]['kesehatan'] <= 0 ? 0.00 : 1.00,
				"pendidikan" => $data[$i]['pendidikan'] <= 0 ? 0.00 : 1.00,
			];
		}
		return $preferensi;
	}

	public static function ip($preferensi, $rerata)
	{
		for ($i = 0; $i < count($preferensi); $i++) {
			$ip[] = [
				"id" => $preferensi[$i]['id'],
				"ekonomi" => $ekonomi = $preferensi[$i]['ekonomi'] * $rerata['ekonomi'],
				"kesehatan" => $kesehatan = $preferensi[$i]['kesehatan'] * $rerata['kesehatan'],
				"pendidikan" => $pendidikan = $preferensi[$i]['pendidikan'] * $rerata['pendidikan'],
				"jumlah" => $ekonomi + $kesehatan + $pendidikan
			];
		}
		return $ip;
	}
	public static function matrix($data)
	{
		foreach ($data as $value) {
			$key = explode(',', $value['id']);
			$matrix[$key[0]][$key[1]] = $value['jumlah'];
		}
		return $matrix;
	}

	public static function pr($data)
	{
		$i = 0;
		foreach ($data as $key => $value) {
			$lf = $ef = 0;
			foreach ($data[$key] as $key2 => $value2) {
				$lf += $data[$key][$key2];
				$ef += $data[$key2][$key];
			}
			$pr[$i]['id'] = $key;
			$pr[$i]['leaving_flow'] = $lf / (count($data) - 1);
			$pr[$i]['entering_flow'] = $ef / (count($data) - 1);
			$i++;
		}
		return $pr;
	}
	public static function cr($data)
	{
		foreach ($data as $value) {
			$cr[] = [
				'id' => $value['id'],
				'net_flow' => $value['leaving_flow'] - $value['entering_flow']
			];
		}
		return $cr;
	}
	public static function pa($data, $alternatif)
	{
		$i = 0;
		foreach ($data as $value) {
			$pa[] = [
				'id' => $value['id'],
				'nama' => $alternatif[$i]['nama'],
				'net_flow' => $value['net_flow'],
			];
			++$i;
		}
		return $pa;
	}

	private static function kesehatan($do, $data, $bobot = null)
	{
		if ($do == 'alternatif') {
			$kesehatan = ($bobot->kriteria[0]->sub_kriteria[$data->StaHamil - 1]->bobot_sub) +
				($bobot->kriteria[1]->sub_kriteria[$data->JenisCacat - 1]->bobot_sub) +
				($bobot->kriteria[2]->sub_kriteria[$data->PenyakitKronis - 1]->bobot_sub);
			return number_format((float) $kesehatan, 2, '.', '');
		} elseif ($do == 'konfersi') {
			if ($data < 3.6) {
				return 1.00;
			} elseif ($data >= 3.6 && $data < 13.4) {
				return 2.00;
			} elseif ($data >= 13.4) {
				return 3.00;
			}
		}
	}

	private static function ekonomi($do, $data, $bobot)
	{
		if ($do == 'alternatif') {
			$ekonomi = ($bobot->kriteria[0]->sub_kriteria[$data->StaBekerja - 1]->bobot_sub) +
				($bobot->kriteria[1]->sub_kriteria[$data->LapanganUsaha - 1]->bobot_sub) +
				($bobot->kriteria[2]->sub_kriteria[$data->StatusPekerjaan - 1]->bobot_sub);
			return number_format((float) $ekonomi, 2, '.', '');
		} elseif ($do == 'konfersi') {
			if ($data < 8.94) {
				return 1.00;
			} elseif ($data >= 8.94 && $data < 25.0) {
				return 2.00;
			} elseif ($data >= 25.0) {
				return 3.00;
			}
		}
	}

	private static function pendidikan($do, $data, $bobot)
	{
		if ($do == 'alternatif') {
			$pendidikan = ($bobot->kriteria[0]->sub_kriteria[$data->PartisipasiSekolah]->bobot_sub) +
				($bobot->kriteria[1]->sub_kriteria[$data->PendidikanTertinggi - 1]->bobot_sub) +
				($bobot->kriteria[3]->sub_kriteria[$data->IjazahTertinggi - 1]->bobot_sub);

			if ($data->KelasTertinggi < 3)
				$pendidikan += ($bobot->kriteria[2]->sub_kriteria[0]->bobot_sub);
			elseif ($data->KelasTertinggi < 5)
				$pendidikan += ($bobot->kriteria[2]->sub_kriteria[1]->bobot_sub);
			elseif ($data->KelasTertinggi < 7)
				$pendidikan += ($bobot->kriteria[2]->sub_kriteria[2]->bobot_sub);
			else
				$pendidikan += ($bobot->kriteria[2]->sub_kriteria[3]->bobot_sub);

			return number_format((float) $pendidikan, 2, '.', '');
		} elseif ($do == 'konfersi') {
			if ($data < 1.57) {
				return 1.00;
			} elseif ($data >= 1.57 && $data < 7.44) {
				return 2.00;
			} elseif ($data >= 7.44) {
				return 3.00;
			}
		}
	}

	public static function data($bobot, int $kriteria, int $pilihan)
	{
		return $bobot->kriteria[$kriteria]->sub_kriteria[$pilihan - 1]->bobot_sub;
	}
}
