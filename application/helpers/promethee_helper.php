<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PROMETHEE_METHOD
{
	public static function alternatif($type, $data)
	{
		if ($type == 'individu') {
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
		} elseif ($type == 'keluarga') {
			$bobot = DB_CUSTOM::bobot('keluarga')->data;
			foreach ($bobot as $json) {
				$json->kriteria = json_decode($json->kriteria);
				foreach ($json->kriteria as $json_sub) {
					$json_sub->sub_kriteria = json_decode($json_sub->sub_kriteria);
				}
			}

			for ($i = 0; $i < count($data); $i++) {
				$alternatif['nilai'][] = array(
					"id" => "A" . $data[$i]->id_Survey,
					"nama" => $data[$i]->NamaKRT,
					"perumahan" => self::perumahan('alternatif', $data[$i], $bobot[0]),
					"asset" => self::asset('alternatif', $data[$i], $bobot[1]),
				);
			}

			$perumahan = $asset = 0;
			foreach ($alternatif['nilai'] as $value) {
				$perumahan += $value['perumahan'];
				$asset += $value['asset'];
			}
			$alternatif['rerata'] = [
				"perumahan" => $perumahan / count($alternatif['nilai']),
				"asset" => $asset / count($alternatif['nilai']),
			];
		}
		return $alternatif;
	}

	public static function konfersi($type, $data)
	{
		if ($type == 'individu')
			foreach ($data['nilai'] as $value) {
				if (!isset($value['rerata']))
					$konfersi[] = array(
						"id" => $value['id'],
						"nama" => $value['nama'],
						"ekonomi" => self::ekonomi('konfersi', $value['ekonomi'], null),
						"kesehatan" => self::kesehatan('konfersi', $value['kesehatan'], null),
						"pendidikan" => self::pendidikan('konfersi', $value['pendidikan'], null),
					);
			} else
			foreach ($data['nilai'] as $value) {
				if (!isset($value['rerata']))
					$konfersi[] = array(
						"id" => $value['id'],
						"nama" => $value['nama'],
						"perumahan" => self::perumahan('konfersi', $value['perumahan'], null),
						"asset" => self::asset('konfersi', $value['asset'], null),
					);
			}

		return $konfersi;
	}

	public static function deviasi($type, $data)
	{
		if ($type == 'individu') {
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
		} else {
			for ($i = 0; $i < count($data); $i++) {
				for ($j = 0; $j < count($data); $j++) {
					$deviasi[] = [
						"id" => $data[$i]['id'] . "," . $data[$j]['id'],
						"perumahan" => $data[$i]['perumahan'] - $data[$j]['perumahan'],
						"asset" => $data[$i]['asset'] - $data[$j]['asset'],
					];
				}
			}
			return $deviasi;
		}
	}

	public static function preferensi($type, $data)
	{

		if ($type == 'individu') {
			for ($i = 0; $i < count($data); $i++) {
				$preferensi[] = [
					"id" => $data[$i]['id'],
					"ekonomi" => $data[$i]['ekonomi'] <= 0 ? 0.00 : 1.00,
					"kesehatan" => $data[$i]['kesehatan'] <= 0 ? 0.00 : 1.00,
					"pendidikan" => $data[$i]['pendidikan'] <= 0 ? 0.00 : 1.00,
				];
			}
			return $preferensi;
		} else {
			for ($i = 0; $i < count($data); $i++) {
				$preferensi[] = [
					"id" => $data[$i]['id'],
					"perumahan" => $data[$i]['perumahan'] <= 0 ? 0.00 : 1.00,
					"asset" => $data[$i]['asset'] <= 0 ? 0.00 : 1.00,
				];
			}
			return $preferensi;
		}
	}

	public static function ip($type, $preferensi, $rerata)
	{

		if ($type == 'individu') {
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
		} else {
			for ($i = 0; $i < count($preferensi); $i++) {
				$ip[] = [
					"id" => $preferensi[$i]['id'],
					"perumahan" => $perumahan = $preferensi[$i]['perumahan'] * $rerata['perumahan'],
					"asset" => $asset = $preferensi[$i]['asset'] * $rerata['asset'],
					"jumlah" => $perumahan + $asset
				];
			}
			return $ip;
		}
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

	private static function kesehatan($do, $data, $bobot)
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

	private static function perumahan($do, $data, $bobot)
	{
		$perumahan = (float) 0;
		if ($do == 'alternatif') {
			$perumahan =
				self::data($bobot, 0, $data->StaBangunan) +
				self::data($bobot, 0, $data->StaLahan + 5) +
				self::data($bobot, 2, $data->Lantai) +
				self::data($bobot, 3, $data->Dinding) +
				self::data($bobot, 3, $data->KondisiDinding + 7) +
				self::data($bobot, 4, $data->Atap) +
				self::data($bobot, 4, $data->KondisiAtap + 10) +
				self::data($bobot, 6, $data->SumberAirminum) +
				self::data($bobot, 7, $data->MemperolehAirminum) +
				self::data($bobot, 8, $data->SumberPenerangan) +
				self::data($bobot, 8, $data->Daya + 3) +
				self::data($bobot, 9, $data->BahanMasak) +
				self::data($bobot, 10, $data->FasilitasBAB) +
				self::data($bobot, 10, $data->Kloset + 4) +
				self::data($bobot, 11, $data->BuangTinja);

			if ($data->LuasLantai < 24)
				$perumahan += self::data($bobot, 1, 1);
			elseif ($data->LuasLantai == 24)
				$perumahan += self::data($bobot, 1, 2);
			elseif ($data->LuasLantai < 25 && $data->LuasLantai <= 27)
				$perumahan += self::data($bobot, 1, 3);
			else
				$perumahan += self::data($bobot, 1, 4);

			// jumlah kamar
			if ($data->JumlahKamar <= 3)
				$perumahan += self::data($bobot, 5, $data->JumlahKamar);
			else
				$perumahan += self::data($bobot, 5, 4);

			return number_format((float) $perumahan, 2, '.', '');
		} elseif ($do == 'konfersi') {
			if ($data < 6.74) {
				return 1.00;
			} elseif (6.74 <= $data && $data < 45.08) {
				return 2.00;
			} elseif ($data >= 45.08) {
				return 3.00;
			}
		}
	}
	private static function asset($do, $data, $bobot)
	{
		if ($do == 'alternatif') {
			$asset = 0;
			if ($data->AdaTabungGas > 0)
				$asset += self::data($bobot, 0, 1);

			if ($data->AdaLemariEs > 0)
				$asset += self::data($bobot, 0, 2);

			if ($data->AdaAC > 0)
				$asset += self::data($bobot, 0, 3);

			if ($data->AdaPemanas > 0)
				$asset += self::data($bobot, 0, 4);

			if ($data->AdaTelepon > 0)
				$asset += self::data($bobot, 0, 5);

			if ($data->AdaTv > 0)
				$asset += self::data($bobot, 0, 6);

			if ($data->AdaEmas > 0)
				$asset += self::data($bobot, 0, 7);

			if ($data->AdaLaptop > 0)
				$asset += self::data($bobot, 0, 8);

			if ($data->AdaSepeda > 0)
				$asset += self::data($bobot, 0, 9);

			if ($data->AdaMotor > 0)
				$asset += self::data($bobot, 0, 10);

			if ($data->AdaMobil > 0)
				$asset += self::data($bobot, 0, 11);

			if ($data->AdaPerahu > 0)
				$asset += self::data($bobot, 0, 12);

			if ($data->AdaMotorTempel > 0)
				$asset += self::data($bobot, 0, 13);

			if ($data->AdaPerahuMotor > 0)
				$asset += self::data($bobot, 0, 14);

			if ($data->AdaKapal > 0)
				$asset += self::data($bobot, 0, 15);

			if ($data->LuasAtb > 0)
				$asset += self::data($bobot, 1, 1);

			if ($data->JumlahSapi > 0)
				$asset += self::data($bobot, 2, 1);

			if ($data->JumlahKerbau > 0)
				$asset += self::data($bobot, 2, 2);

			if ($data->JumlahKuda > 0)
				$asset += self::data($bobot, 2, 3);

			if ($data->JumlahBabi > 0)
				$asset += self::data($bobot, 2, 4);

			if ($data->JumlahKambing > 0)
				$asset += self::data($bobot, 2, 5);

			if ($data->StaKKS > 0)
				$asset += self::data($bobot, 4, 1);

			if ($data->StaKIP > 0)
				$asset += self::data($bobot, 4, 2);

			if ($data->StaKIS > 0)
				$asset += self::data($bobot, 4, 3);

			if ($data->StaBPJSMandiri > 0)
				$asset += self::data($bobot, 4, 4);

			if ($data->StaJamsostek > 0)
				$asset += self::data($bobot, 4, 5);

			if ($data->StaAsuransi > 0)
				$asset += self::data($bobot, 4, 6);

			if ($data->StaPkh > 0)
				$asset += self::data($bobot, 4, 7);

			if ($data->Raskin > 0)
				$asset += self::data($bobot, 4, 8);

			if ($data->StaKur > 0)
				$asset += self::data($bobot, 4, 9);

			$asset += self::data($bobot, 3, $data->StaUsaha);

			return number_format((float) $asset, 2, '.', '');
		} elseif ($do == 'konfersi') {
			if ($data < 9.14) {
				return 1.00;
			} elseif (9.14 <= $data && $data < 12.95) {
				return 2.00;
			} elseif ($data >= 12.95) {
				return 3.00;
			}
		}
	}

	private static function data($bobot, int $kriteria, int $pilihan)
	{
		return $bobot->kriteria[$kriteria]->sub_kriteria[$pilihan - 1]->bobot_sub;
	}
}
