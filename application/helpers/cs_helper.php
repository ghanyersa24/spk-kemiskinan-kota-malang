<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CS_METHOD
{
	public static function rank($data, $type)
	{
		$ranking = self::parse($data, $type);
		return self::get_rank($data, $ranking);
	}

	public static function pairwase($data)
	{
		$i = 0;
		foreach ($data as $value) {
			$pairwase[$i]['id'] = $value->id;
			$pairwase[$i]['nama'] = $value->nama;
			foreach ($data as $value2) {
				$pairwase[$i]['vs'][$value2->id] = $point = self::point($value->point, $value2->point);
				$pairwase[$i]['menang'] = (isset($pairwase[$value->id]['menang']) ? $pairwase[$value->id]['menang'] : 0) + ($point == 1 ? 1 : 0);
				$pairwase[$i]['seri'] = (isset($pairwase[$value->id]['seri']) ? $pairwase[$value->id]['seri'] : 0) + ($point == 0 ? 1 : 0);
				$pairwase[$i]['kalah'] = (isset($pairwase[$value->id]['kalah']) ? $pairwase[$value->id]['kalah'] : 0) + ($point == -1 ? 1 : 0);
			}
			++$i;
		}
		return $pairwase;
	}

	public static function perhitungan($pairwase, $pairwase2, $pairwase3)
	{
		foreach ($pairwase as $key => $value) {
			$perhitungan[] = [
				"id" => $value['id'],
				"nama" => $value['nama'],
				"menang" => $menang = $value['menang'] + $pairwase2[$key]['menang'] + $pairwase3[$key]['menang'],
				"seri" => $seri = ($value['seri'] + $pairwase2[$key]['seri'] + $pairwase3[$key]['seri']) * 0,
				"kalah" => $kalah =  ($value['kalah'] + $pairwase2[$key]['kalah'] + $pairwase3[$key]['kalah']) * -1,
				"point" => $menang + $seri + $kalah
			];
		}
		return $perhitungan;
	}

	public static function perankingan($data)
	{
		$rank = self::parse($data, 'perankingan');
		$key = array_keys($rank);
		foreach ($data as $value) {
			for ($i = 0; $i < count($rank); $i++) {
				if ($key[$i] == $value['id']) {
					$ranking[] = [
						'id' => $value['id'],
						'nama' => $value['nama'],
						'point' => $value['point'],
						'position' => $i + 1
					];
				}
			}
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
		foreach ($data as $value) {
			if ($type == 'promethee')
				$temp[$value->id] = $value->net_flow;
			elseif ($type == 'wp')
				$temp[$value->id] = $value->hasil;
			elseif ($type == 'saw')
				$temp[$value->id] = $value->jumlah;
			elseif ($type == 'perankingan')
				$temp[$value['id']] = $value['point'];
		}
		arsort($temp);
		return $temp;
	}

	private static function get_rank($data, $rank)
	{
		$count = count($data);
		$key = array_keys($rank);
		foreach ($data as $value) {
			for ($i = 0; $i < count($rank); $i++) {
				if ($key[$i] == $value->id) {
					$value->total = (isset($value->net_flow) ? $value->net_flow : (isset($value->hasil) ? $value->hasil : $value->jumlah));
					$value->position = $i + 1;
					$value->point = $count - $i;
				}
			}
		}
		return $data;
	}
}
