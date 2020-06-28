<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CS_METHOD
{
	public static function rank($data, $type)
	{
		$parse = self::parse($data, $type);
		return self::get_rank($parse);
	}

	public static function pairwase($data)
	{
		$i = 0;
		foreach ($data as $value) {
			$pairwase[$i]['id'] = $value->id;
			$pairwase[$i]['nama'] = $value->nama;
			$menang = $kalah = $seri = 0;
			foreach ($data as $value2) {
				$pairwase[$i]['vs'][$value2->id] = $point = self::point($value->point, $value2->point);
				$pairwase[$i]['menang'] = $menang += ($point == 1 ? 1 : 0);
				$pairwase[$i]['seri'] = $seri += ($point == 0 ? 1 : 0);
				$pairwase[$i]['kalah'] = $kalah += ($point == -1 ? 1 : 0);
			}
			++$i;
		}
		return $pairwase;
	}

	public static function perhitungan($pairwase, $pairwase2, $pairwase3)
	{
		$pairwase = self::revert($pairwase);
		$pairwase2 = self::revert($pairwase2);
		$pairwase3 = self::revert($pairwase3);
		foreach ($pairwase as $key => $value) {
			$perhitungan[] = [
				"id" => $value['id'],
				"nama" => $value['nama'],
				"menang" => $menang = $value['menang'] + $pairwase2[$key]['menang'] + $pairwase3[$key]['menang'],
				"seri" => $seri = ($value['seri'] + $pairwase2[$key]['seri'] + $pairwase3[$key]['seri']),
				"kalah" => $kalah =  ($value['kalah'] + $pairwase2[$key]['kalah'] + $pairwase3[$key]['kalah']),
				"point" => $menang + $seri + $kalah
			];
		}
		return $perhitungan;
	}

	public static function perkalian($data)
	{
		foreach ($data as $value) {
			$arr[] = [
				"id" => $value['id'],
				"nama" => $value['nama'],
				"menang" => $menang = $value['menang'] * 1,
				"seri" => $seri = $value['seri'] * 0,
				"kalah" => $kalah =  $value['kalah'] * -1,
				"point" => $menang + $seri + $kalah
			];
		}
		return $arr;
	}

	public static function revert($data)
	{
		for ($i = 0; $i < count($data); $i++) {
			for ($j = 0; $j < count($data); $j++) {
				if ($data[$j]['id'] > $data[$i]['id']) {
					$tmp = $data[$i];
					$data[$i] = $data[$j];
					$data[$j] = $tmp;
				}
			}
		}
		return $data;
	}

	public static function perankingan($data)
	{
		$rank = self::parse($data, 'perankingan');
		$i = 1;
		foreach ($rank as $value) {
			$ranking[] = [
				'id' => $value['id'],
				'nama' => $value['nama'],
				'point' => $value['point'],
				'position' => $i++
			];
		}
		return $ranking;
	}
	private static function point($x, $y)
	{
		if ($x > $y)
			return 1;
		elseif ($x == $y)
			return 0;
		else
			return -1;
	}
	private static function parse($data, $type)
	{
		for ($i = 0; $i < count($data); $i++) {
			for ($j = 0; $j < count($data); $j++) {
				if ($type == 'promethee') {
					if ($data[$j]->net_flow < $data[$i]->net_flow) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					} elseif ($data[$j]->net_flow == $data[$i]->net_flow && $data[$j]->id > $data[$i]->id) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					}
				} elseif ($type == 'wp') {
					if ($data[$j]->hasil < $data[$i]->hasil) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					} elseif ($data[$j]->hasil == $data[$i]->hasil && $data[$j]->id > $data[$i]->id) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					}
				} elseif ($type == 'saw') {
					if ($data[$j]->jumlah < $data[$i]->jumlah) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					} elseif ($data[$j]->jumlah == $data[$i]->jumlah && $data[$j]->id > $data[$i]->id) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					}
				} elseif ($type == 'perankingan') {
					if ($data[$j]['point'] < $data[$i]['point']) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					} elseif ($data[$j]['point'] == $data[$i]['point'] && $data[$j]['id'] > $data[$i]['id']) {
						$tmp = $data[$i];
						$data[$i] = $data[$j];
						$data[$j] = $tmp;
					}
				}
			}
		}
		return $data;
	}

	private static function get_rank($parse)
	{
		$count = count($parse);
		$i = 0;
		foreach ($parse as $value) {
			$value->total = (isset($value->net_flow) ? $value->net_flow : (isset($value->hasil) ? $value->hasil : $value->jumlah));
			$value->position = $i + 1;
			$value->point = $count - $i++;
		}
		return $parse;
	}
}
