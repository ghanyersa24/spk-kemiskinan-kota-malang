<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PROMETHEE_METHOD
{
	public static function konfersi($type, $data)
	{
		if ($type == 'individu')
			foreach ($data['nilai'] as $value) {
				if (!isset($value['rerata']))
					$konfersi[] = array(
						"id" => $value['id'],
						"nama" => $value['nama'],
						"ekonomi" => ALTERNATIF::ekonomi('konfersi', $value['ekonomi'], null),
						"kesehatan" => ALTERNATIF::kesehatan('konfersi', $value['kesehatan'], null),
						"pendidikan" => ALTERNATIF::pendidikan('konfersi', $value['pendidikan'], null),
					);
			} else
			foreach ($data['nilai'] as $value) {
				if (!isset($value['rerata']))
					$konfersi[] = array(
						"id" => $value['id'],
						"nama" => $value['nama'],
						"perumahan" => ALTERNATIF::perumahan('konfersi', $value['perumahan'], null),
						"asset" => ALTERNATIF::asset('konfersi', $value['asset'], null),
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
						"id" => $data[$i]['id'] . " , " . $data[$j]['id'],
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
						"id" => $data[$i]['id'] . " , " . $data[$j]['id'],
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
			$key = explode(' , ', $value['id']);
			$matrix[$key[0]][$key[1]] = $value['jumlah'];
		}
		return $matrix;
	}

	public static function pr($data, $alternatif)
	{
		$i = 0;
		foreach ($data as $key => $value) {
			$lf = $ef = 0;
			foreach ($data[$key] as $key2 => $value2) {
				$lf += $data[$key][$key2];
				$ef += $data[$key2][$key];
			}
			$pr[$i]['id'] = $key;
			$pr[$i]['nama'] = $alternatif[$i]['nama'];
			$pr[$i]['leaving_flow'] = $lf / (count($data) - 1);
			$pr[$i]['entering_flow'] = $ef / (count($data) - 1);
			$i++;
		}
		return $pr;
	}
	public static function cr($data, $alternatif)
	{
		$i = 0;
		foreach ($data as $value) {
			$cr[] = [
				'id' => $value['id'],
				'nama' => $alternatif[$i]['nama'],
				'net_flow' => $value['leaving_flow'] - $value['entering_flow']
			];
			$i++;
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
}
