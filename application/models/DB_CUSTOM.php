<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DB_CUSTOM extends CI_Model
{
	public static function all($table)
	{
		$CI = &get_instance();
		$query = $CI->db->order_by("created_at", 'DESC')->get($table);
		if ($query)
			return true($query->result());
		else
			return false();
	}
	public static function alternatif()
	{
		$CI = &get_instance();
		$query = $CI->db->select('sr.id_survey, sr.IdJenisPenerima, pr.Nama NamaPerorangan, pt.NamaKRT NamaKeluarga, pr.Alamat AlamatPerorangan, pt.Alamat AlamatKeluarga, ptgs.TglPemeriksa ')
			->from('survey sr')
			->join('perorangan pr', 'pr.IdEkonomi = sr.IdEkonomi', 'left')
			->join('pengenalantempat pt', 'pt.IdPengenalanTempat = sr.IdPengenalanTempat', 'left')
			->join('petugas ptgs', 'ptgs.IdPetugas = sr.IdPetugas', 'left')
			->where(['is_deleted' => 0])
			->get()->result();
		return true($query);
	}
	public static function detail_alternatif($id_survey = null, $id_jenis)
	{
		$CI = &get_instance();
		if ($id_jenis == 1) {
			$CI->db->from('survey')
				->join('petugas', 'survey.IdPetugas=petugas.IdPetugas', 'left')
				->join('perorangan', 'survey.IdEkonomi=perorangan.IdEkonomi', 'left')
				->join('kartuidentitas', 'perorangan.AdaKartuIdentitas=kartuidentitas.IdKartuIdentitas')
				->where(['is_deleted' => 0]);
			if (!is_null($id_survey))
				$query = $CI->db->where(['id_Survey' => $id_survey])->get()->row();
			else
				$query = $CI->db->get()->result();
		} elseif ($id_jenis == 2) {
			$query = $CI->db->from('survey')
				->join('pengenalantempat', 'survey.IdPengenalanTempat=PengenalanTempat.IdPengenalanTempat', 'left')
				->join('perumahan', 'survey.IdPerumahan=perumahan.IdPerumahan', 'left')
				->join('aset', 'survey.IdAset=aset.IdAset', 'left')
				->join('asetbergerak', 'asetbergerak.IdAsetBergerak=aset.IdAsetBergerak')
				->join('asettidakbergerak', 'asettidakbergerak.IdAsetTidakBergerak=aset.IdAsetTidakBergerak')
				->join('jenisusaha', 'jenisusaha.IdJenisUsaha=aset.IdJenisUsaha')
				->join('program', 'program.IdProgram=aset.IdProgram')
				->join('ternak', 'ternak.IdTernak=aset.IdTernak')
				->join('petugas', 'survey.IdPetugas=petugas.IdPetugas', 'left')
				->where(['is_deleted' => 0]);
			if (!is_null($id_survey))
				$query = $CI->db->where(['id_Survey' => $id_survey])->get()->row();
			else
				$query = $CI->db->get()->result();
		}
		return true($query);
	}
	public static function bobot($tujuan)
	{
		$CI = &get_instance();
		$query = $CI->db
			->select("indikator.*, `kriteria`(`indikator`.`id`) as kriteria")
			->from('indikator')
			->where("indikator.tujuan = '$tujuan'")
			->get()->result();
		return true($query);
	}

	public static function vote()
	{
		$CI = &get_instance();
		$query = $CI->db
			->select("vote.*,count(*) vote")
			->from('vote')
			->group_by('survey_id')
			->get()->result();
		return true($query);
	}
}
