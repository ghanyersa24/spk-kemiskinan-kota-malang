<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SAW_METHOD
{
	public static function min_max($type, $data)
	{
		if ($type == 'individu') {
			$min_ekonomi = $min_kesehatan = $min_pendidikan = 99;
			$max_ekonomi = $max_kesehatan = $max_pendidikan = -99;
			foreach ($data['nilai'] as $value) {
				if ($value['pendidikan'] > $max_pendidikan)
					$max_pendidikan = $value['pendidikan'];
				if ($value['pendidikan'] < $min_pendidikan)
					$min_pendidikan = $value['pendidikan'];

				if ($value['ekonomi'] > $max_ekonomi)
					$max_ekonomi = $value['ekonomi'];
				if ($value['ekonomi'] < $min_ekonomi)
					$min_ekonomi = $value['ekonomi'];

				if ($value['kesehatan'] > $max_kesehatan)
					$max_kesehatan = $value['kesehatan'];
				if ($value['kesehatan'] < $min_kesehatan)
					$min_kesehatan = $value['kesehatan'];
			}
			$data['min_max'] = [
				'minimal' => [
					'pendidikan' => $min_pendidikan,
					'kesehatan' => $min_kesehatan,
					'ekonomi' => $min_ekonomi
				],
				'maksimal' => [
					'pendidikan' => $max_pendidikan,
					'kesehatan' => $max_kesehatan,
					'ekonomi' => $max_ekonomi
				]
			];
		} else {
			$min_perumahan = $min_asset = 99;
			$max_perumahan = $max_asset = -99;
			foreach ($data['nilai'] as $value) {
				if ($value['perumahan'] > $max_perumahan)
					$max_perumahan = $value['perumahan'];
				if ($value['perumahan'] < $min_perumahan)
					$min_perumahan = $value['perumahan'];

				if ($value['asset'] > $max_asset)
					$max_asset = $value['asset'];
				if ($value['asset'] < $min_asset)
					$min_asset = $value['asset'];
			}
			$data['min_max'] = [
				'minimal' => [
					'perumahan' => $min_perumahan,
					'asset' => $min_asset,
				],
				'maksimal' => [
					'perumahan' => $max_perumahan,
					'asset' => $max_asset,
				]
			];
		}
		return $data;
	}

	public static function normalisasi($type, $alternatif)
	{
		$return = array();
		if ($type == 'individu') {
			foreach ($alternatif['nilai'] as $value) {
				$return[] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'ekonomi' => $alternatif['min_max']['minimal']['ekonomi'] / $value['ekonomi'],
					'kesehatan' => $value['kesehatan'] / $alternatif['min_max']['maksimal']['kesehatan'],
					'pendidikan' => $alternatif['min_max']['minimal']['pendidikan'] / $value['pendidikan'],
				];
			}
		} else {
			foreach ($alternatif['nilai'] as $value) {
				$return[] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'perumahan' => $alternatif['min_max']['minimal']['perumahan'] / $value['perumahan'],
					'asset' => $alternatif['min_max']['minimal']['asset'] / $value['asset'],
				];
			}
		}

		return $return;
	}
	public static function vektor_v($type, $normalisasi)
	{
		$return = array();
		if ($type == 'individu') {
			$bobot = DB_CUSTOM::bobot('individu')->data;
			foreach ($normalisasi as $value) {
				$return[] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'ekonomi' => $ekonomi = $value['ekonomi'] * $bobot[2]->bobot_indikator,
					'kesehatan' => $kesehatan = $value['kesehatan'] * $bobot[0]->bobot_indikator,
					'pendidikan' => $pendidikan = $value['pendidikan'] * $bobot[1]->bobot_indikator,
					'jumlah' => $ekonomi + $kesehatan + $pendidikan
				];
			}
		} else {
			$bobot = DB_CUSTOM::bobot('keluarga')->data;
			// success("", $bobot);
			foreach ($normalisasi as $value) {
				$return[] = [
					'id' => $value['id'],
					'nama' => $value['nama'],
					'perumahan' => $perumahan = $value['perumahan'] * $bobot[0]->bobot_indikator,
					'asset' => $asset = $value['asset'] * $bobot[1]->bobot_indikator,
					'jumlah' => $perumahan + $asset
				];
			}
		}
		return $return;
	}
}
