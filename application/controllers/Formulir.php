<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
	protected $table = "roles";
	public function __construct()
	{
		parent::__construct();
		// additional library
	}
	public function create()
	{
		$jenisPenerima = post('JenisPenerima', 'required|enum:1&2');
		$Id_PengenalanTempat = 0;
		$Id_Perumahan = 0;
		$Id_Aset = 0;
		if ($jenisPenerima == "2") {
			// Data pengenalan tempat
			$pengenalantempat = array(
				'IdKecamatan' => post('Kecamatan', 'required|numberic'),
				'IdKelurahan' => post('Kelurahan', 'required|numberic'),
				'NamaSLS' => post('RT', 'required|numberic') . '/' . post('RW', 'required|numberic'),
				'Alamat' => post('Alamat', 'required'),
				'NamaKRT' => post('Nama1', 'required')
			);
			$jenis_usaha = array(
				'StaUsaha' => $this->input->post('StaUsaha', 'required|enum:1&2'),
				'jumlahPekerja' => $this->input->post('JumlahPekerja', 'required'),
				'TempatUsaha' => $this->input->post('TempatUsaha', 'required'),
				'OmsetUsaha' => $this->input->post('OmsetUsaha', 'required'),
			);

			// Data perumahan
			$perumahan = array(
				'StaBangunan' => post('Bangunan', 'required|numberic'),
				'StaLahan' => post('Lahan'),
				'LuasLantai' => post('LuasLantai', 'required|numberic'),
				'Lantai' => post('JenisLantai', 'required|numberic'),
				'Dinding' => post('JenisDinding', 'required|numberic'),
				'KondisiDinding' => post('KondisiDinding', 'required|numberic'),
				'Atap' => post('JenisAtap', 'required|numberic'),
				'KondisiAtap' => post('KondisiAtap', 'required|numberic'),
				'JumlahKamar' => post('JmlKamarTidur', 'required|numberic'),
				'SumberAirminum' => post('SumberAirMinum', 'required|numberic'),
				'MemperolehAirminum' => post('MemperolehAirMinum', 'required|numberic'),
				'SumberPenerangan' => post('PeneranganUtama', 'required|numberic'),
				'Daya' => post('DayaPenerangan', 'required|numberic'),
				'BahanMasak' => post('BahanBakarMasak', 'required|numberic'),
				'FasilitasBAB' => post('FasilitasBAB', 'required|numberic'),
				'Kloset' => post('JenisKloset', 'required|numberic'),
				'BuangTinja' => post('TempatPembuanganTinja', 'required|numberic')
			);

			// Data Aset Bergerak
			$paramAssetBergerak = $this->input->post('AssetBergerak');
			$arrayAssetBergerak = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
			if (!is_null($paramAssetBergerak))
				for ($i = 0; $i < count($paramAssetBergerak); $i++) {
					$valueAssetBergerak = (int) $paramAssetBergerak[$i];
					$arrayAssetBergerak[$valueAssetBergerak - 1] = 1;
				}

			$asetbergerak = array(
				'AdaTabungGas' => $arrayAssetBergerak[0],
				'AdaLemariEs' => $arrayAssetBergerak[1],
				'AdaAC' => $arrayAssetBergerak[2],
				'AdaPemanas' => $arrayAssetBergerak[3],
				'AdaTelepon' => $arrayAssetBergerak[4],
				'AdaTv' => $arrayAssetBergerak[5],
				'AdaEmas' => $arrayAssetBergerak[6],
				'AdaLaptop' => $arrayAssetBergerak[7],
				'AdaSepeda' => $arrayAssetBergerak[8],
				'AdaMotor' => $arrayAssetBergerak[9],
				'AdaMobil' => $arrayAssetBergerak[10],
				'AdaPerahu' => $arrayAssetBergerak[11],
				'AdaMotorTempel' => $arrayAssetBergerak[12],
				'AdaPerahuMotor' => $arrayAssetBergerak[13],
				'AdaKapal' => $arrayAssetBergerak[14]
			);

			// Data aset tidak bergerak
			$asettidakbergerak = array(
				'LuasAtb' => post('luasLahan'),
				'RumahLain' => post('Rumah')
			);

			// Data Ternak
			$ternak = array(
				'JumlahSapi' => post('JumlahSapi'),
				'JumlahKerbau' => post('JumlahKerbau'),
				'JumlahKuda' => post('JumlahKuda'),
				'JumlahBabi' => post('JumlahBabi'),
				'JumlahKambing' => post('JumlahKambing')
			);

			// Data Program
			$paramKartuPemerintah = $this->input->post('KartuPemerintah');
			$arrayKartuPemerintah = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
			if (!is_null($paramKartuPemerintah))
				for ($i = 0; $i < count($paramKartuPemerintah); $i++) {
					$valueKartuPemerintah = (int) $paramKartuPemerintah[$i];
					$arrayKartuPemerintah[$valueKartuPemerintah - 1] = 1;
				}
			$program = array(
				'StaKKS' => $arrayKartuPemerintah[0],
				'StaKIP' => $arrayKartuPemerintah[1],
				'StaKIS' => $arrayKartuPemerintah[2],
				'StaBPJSMandiri' => $arrayKartuPemerintah[3],
				'StaJamsostek' => $arrayKartuPemerintah[4],
				'StaAsuransi' => $arrayKartuPemerintah[5],
				'StaPkh' => $arrayKartuPemerintah[6],
				'Raskin' => $arrayKartuPemerintah[7],
				'StaKur' => $arrayKartuPemerintah[8]
			);

			$do_jenis_usaha = DB_MODEL::insert('jenisUsaha', $jenis_usaha);
			if ($do_jenis_usaha->error)
				error("bermasalah pada insert data Jenis Usaha");
			$id_jenis_usaha = $do_jenis_usaha->data['id'];

			$do_pengenalan_tempat = DB_MODEL::insert('pengenalantempat', $pengenalantempat);
			if ($do_pengenalan_tempat->error)
				error("bermasalah pada insert data pengenalan tempat");
			$Id_PengenalanTempat = $do_pengenalan_tempat->data['id'];

			$do_perumahan = DB_MODEL::insert('perumahan', $perumahan);
			if ($do_perumahan->error)
				error("bermasalah pada insert data perumahan");
			$Id_Perumahan = $do_perumahan->data['id'];

			$do_aset_bergerak = DB_MODEL::insert('asetbergerak', $asetbergerak);
			if ($do_aset_bergerak->error)
				error("bermasalah pada insert data aset bergerak");
			$Id_AsetBergerak = $do_aset_bergerak->data['id'];

			$do_aset_tidak_bergerak = DB_MODEL::insert('asettidakbergerak', $asettidakbergerak);
			if ($do_aset_tidak_bergerak->error)
				error("bermasalah pada insert data aset tidak bergerak");
			$Id_AsetTidakBergerak = $do_aset_tidak_bergerak->data['id'];

			$do_ternak = DB_MODEL::insert('ternak', $ternak);
			if ($do_ternak->error)
				error("bermasalah pada insert data ternak");
			$Id_Ternak = $do_ternak->data['id'];

			$do_program = DB_MODEL::insert('program', $program);
			if ($do_program->error)
				error("bermasalah pada insert data program");
			$Id_Progam = $do_program->data['id'];

			// Data Aset
			$aset = array(
				'IdAsetTidakBergerak' => $Id_AsetTidakBergerak,
				'IdAsetBergerak' => $Id_AsetBergerak,
				'IdProgram' => $Id_Progam,
				'IdTernak' => $Id_Ternak,
				'IdJenisUsaha' => $id_jenis_usaha
			);

			$do_aset = DB_MODEL::insert('aset', $aset);
			if ($do_aset->error)
				error("bermasalah pada insert data aset");
			$Id_Aset = $do_aset->data['id'];
		}

		$Id_Perorangan = 0;
		if ($jenisPenerima == "1") {
			// Data kartu identitas
			$paramKartuIdentitas = post('KartuIdentitas', 'required');
			$arrayKartuIdentitas = array(0, 0, 0, 0);
			for ($i = 0; $i < count($paramKartuIdentitas); $i++) {
				$valueKartuIdentitas = (int) $paramKartuIdentitas[$i];
				$arrayKartuIdentitas[$valueKartuIdentitas - 1] = 1;
			}
			$KartuIdentitas = array(
				'adaAktaKelahiran' => $arrayKartuIdentitas[0],
				'adaKartuPelajar' => $arrayKartuIdentitas[1],
				'adaKTP' => $arrayKartuIdentitas[2],
				'adaSIM' => $arrayKartuIdentitas[3]
			);
			$do_kartu_identitas = DB_MODEL::insert('kartuidentitas', $KartuIdentitas);
			if ($do_kartu_identitas->error)
				error("bermasalah pada insert data kartu identitas");
			$Id_KartuIdentitas = $do_kartu_identitas->data['id'];

			// Data perorangan
			$perorangan = array(
				'NIK' => post('NIK', 'required|numberic'),
				'IdPengenalanTempat' => $Id_PengenalanTempat,
				'Nama' => post('Nama', 'required'),
				'NamaSLS' => post('RT1', 'required|numberic') . '/' . post('RW1', 'required|numberic'),
				'Alamat' => post('Alamat1', 'required'),
				'HubKRT' => post('HubKRT', 'required|numberic'),
				'NoKK' => post('NoKeluarga', 'required|numberic'),
				'JnsKel' => post('JenisKlamin', 'required|numberic'),
				'Umur' => post('Umur', 'required|numberic'),
				'StaKawin' => post('StatusPerkawinan', 'required|numberic'),
				'AktaNikah' => post('KepemilikanBukuNikah', 'required|numberic'),
				'AdaDiKK' => post('TercantumDalamKertuKeluarga', 'required|numberic'),
				'AdaKartuIdentitas' => $Id_KartuIdentitas,
				'StaHamil' => post('StaHamil', 'required|numberic'),
				'JenisCacat' => post('JenisCacat', 'required|numberic'),
				'PenyakitKronis' => post('PenyakitKronis', 'required|numberic'),
				'PartisipasiSekolah' => post('PartisipasiSekolah', 'required|numberic'),
				'PendidikanTertinggi' => post('JenjangPendidikanTertinggi', 'required|numberic'),
				'KelasTertinggi' => post('KelasTertinggi', 'required|numberic'),
				'IjazahTertinggi' => post('IjazahTertinggi', 'required|numberic'),
				'StaBekerja' => post('StatusBekerja', 'required|numberic'),
				'LapanganUsaha' => post('LapanganPekerjaan', 'required|numberic'),
				'StatusPekerjaan' => post('StatusKedudukanPekerjaan', 'required|numberic')
			);

			$do_perorangan = DB_MODEL::insert('perorangan', $perorangan);
			if ($do_perorangan->error)
				error("bermasalah pada insert data perorangan");
			$Id_Perorangan = $do_perorangan->data['id'];
		}

		// Data Petugas
		$petugas = array(
			'TglPemeriksa' => post('Tanggal', 'required|date_valid'),
			'IdPemeriksa' => 1,
		);
		$do_petugas = DB_MODEL::insert('petugas', $petugas);
		if ($do_petugas->error)
			error("bermasalah pada insert data petugas");
		$Id_Petugas = $do_petugas->data['id'];

		// Data Survery
		$survey = array(
			'IdAset' => $Id_Aset,
			'IdJenisPenerima' => $jenisPenerima,
			'IdPengenalanTempat' => $Id_PengenalanTempat,
			'IdPerumahan' => $Id_Perumahan,
			'IdPetugas' => $Id_Petugas,
			'IdEkonomi' => $Id_Perorangan
		);

		$do_survey = DB_MODEL::insert('survey', $survey);
		if ($do_survey->error)
			error("bermasalah pada insert data survey");
		$Id_Survey = $do_survey->data['id'];

		success("data berhasil ditambahkan", $do_survey->data);
	}

	public function get($id = null)
	{
		if (is_null($id))
			$do = DB_CUSTOM::alternatif();
		else {
			$penerima = post('id_jenis', 'required|enum:1&2');
			$do = DB_CUSTOM::detail_alternatif($id, $penerima);
		}
		// var_dump($do);
		if (!$do->error) {
			if (!is_null($id)) {
				$temp = explode('/', $do->data->NamaSLS);
				$do->data->RT = $temp[0];
				$do->data->RW = $temp[1];

				if ($penerima == 2) {
					$do->data->program = implode(',', (array) DB_MODEL::find('program', ['IdProgram' => $do->data->IdProgram])->data);
					$do->data->assetbergerak = implode(',', (array) DB_MODEL::find('asetbergerak', ['IdAsetBergerak' => $do->data->IdAsetBergerak])->data);
				}
			}
			success("data berhasil ditemukan", $do->data);
		} else
			error("data gagal ditemukan");
	}

	public function update()
	{
		$jenisPenerima = post('IdJenisPenerima', 'required|enum:1&2');
		$Id_PengenalanTempat = 0;
		if ($jenisPenerima == "2") {
			// Data pengenalan tempat
			$pengenalantempat = array(
				'IdKecamatan' => post('Kecamatan', 'required|numberic'),
				'IdKelurahan' => post('Kelurahan', 'required|numberic'),
				'NamaSLS' => post('RT', 'required|numberic') . '/' . post('RW', 'required|numberic'),
				'Alamat' => post('Alamat', 'required'),
				'NamaKRT' => post('Nama1', 'required')
			);

			// Data perumahan
			$perumahan = array(
				'StaBangunan' => post('Bangunan', 'required|numberic'),
				'StaLahan' => post('Lahan'),
				'LuasLantai' => post('LuasLantai', 'required|numberic'),
				'Lantai' => post('JenisLantai', 'required|numberic'),
				'Dinding' => post('JenisDinding', 'required|numberic'),
				'KondisiDinding' => post('KondisiDinding', 'required|numberic'),
				'Atap' => post('JenisAtap', 'required|numberic'),
				'KondisiAtap' => post('KondisiAtap', 'required|numberic'),
				'JumlahKamar' => post('JmlKamarTidur', 'required|numberic|numberic'),
				'SumberAirminum' => post('SumberAirMinum', 'required|numberic'),
				'MemperolehAirminum' => post('MemperolehAirminum', 'required|numberic'),
				'SumberPenerangan' => post('PeneranganUtama', 'required|numberic'),
				'Daya' => post('DayaPenerangan', 'required|numberic'),
				'BahanMasak' => post('BahanBakarMasak', 'required|numberic'),
				'FasilitasBAB' => post('FasilitasBAB', 'required|numberic'),
				'Kloset' => post('JenisKloset', 'required|numberic'),
				'BuangTinja' => post('TempatPembuanganTinja', 'required|numberic')
			);

			// Data Aset Bergerak
			$paramAssetBergerak = post('AssetBergerak', 'required');
			$arrayAssetBergerak = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
			for ($i = 0; $i < count($paramAssetBergerak); $i++) {
				$valueAssetBergerak = (int) $paramAssetBergerak[$i];
				$arrayAssetBergerak[$valueAssetBergerak - 1] = 1;
			}
			$asetbergerak = array(
				'AdaTabungGas' => $arrayAssetBergerak[0],
				'AdaLemariEs' => $arrayAssetBergerak[1],
				'AdaAC' => $arrayAssetBergerak[2],
				'AdaPemanas' => $arrayAssetBergerak[3],
				'AdaTelepon' => $arrayAssetBergerak[4],
				'AdaTv' => $arrayAssetBergerak[5],
				'AdaEmas' => $arrayAssetBergerak[6],
				'AdaLaptop' => $arrayAssetBergerak[7],
				'AdaSepeda' => $arrayAssetBergerak[8],
				'AdaMotor' => $arrayAssetBergerak[9],
				'AdaMobil' => $arrayAssetBergerak[10],
				'AdaPerahu' => $arrayAssetBergerak[11],
				'AdaMotorTempel' => $arrayAssetBergerak[12],
				'AdaPerahuMotor' => $arrayAssetBergerak[13],
				'AdaKapal' => $arrayAssetBergerak[14]
			);

			// Data aset tidak bergerak
			$asettidakbergerak = array(
				'LuasAtb' => post('LuasAtb', 'numberic'),
				'RumahLain' => post('Rumah', 'numberic')
			);

			// Data Ternak
			$ternak = array(
				'JumlahSapi' => post('JumlahSapi', 'numberic'),
				'JumlahKerbau' => post('JumlahKerbau', 'numberic'),
				'JumlahKuda' => post('JumlahKuda', 'numberic'),
				'JumlahBabi' => post('JumlahBabi', 'numberic'),
				'JumlahKambing' => post('JumlahKambing', 'numberic')
			);

			// Data Program
			$paramKartuPemerintah = $this->input->post('KartuPemerintah');
			$arrayKartuPemerintah = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
			if (!is_null($paramKartuPemerintah))
				for ($i = 0; $i < count($paramKartuPemerintah); $i++) {
					$valueKartuPemerintah = (int) $paramKartuPemerintah[$i];
					$arrayKartuPemerintah[$valueKartuPemerintah - 1] = 1;
				}
			$program = array(
				'StaKKS' => $arrayKartuPemerintah[0],
				'StaKIP' => $arrayKartuPemerintah[1],
				'StaKIS' => $arrayKartuPemerintah[2],
				'StaBPJSMandiri' => $arrayKartuPemerintah[3],
				'StaJamsostek' => $arrayKartuPemerintah[4],
				'StaAsuransi' => $arrayKartuPemerintah[5],
				'StaPkh' => $arrayKartuPemerintah[6],
				'Raskin' => $arrayKartuPemerintah[7],
				'StaKur' => $arrayKartuPemerintah[8]
			);

			$where = array(
				"IdPengenalanTempat" => post('IdPengenalanTempat', 'required|numberic'),
			);
			$do_pengenalan_tempat = DB_MODEL::update('pengenalantempat', $where, $pengenalantempat);
			if ($do_pengenalan_tempat->error)
				error("bermasalah pada update data pengenalan tempat");

			$where = array(
				"IdPerumahan" => post('IdPerumahan', 'required|numberic'),
			);
			$do_perumahan = DB_MODEL::update('perumahan', $where, $perumahan);
			if ($do_perumahan->error)
				error("bermasalah pada update data perumahan");

			$where = array(
				"IdAsetBergerak" => post('IdAsetBergerak', 'required|numberic'),
			);
			$do_aset_bergerak = DB_MODEL::update('asetbergerak', $where, $asetbergerak);
			if ($do_aset_bergerak->error)
				error("bermasalah pada update data aset bergerak");

			$where = array(
				"IdAsetTidakBergerak" => post('IdAsetTidakBergerak', 'required|numberic'),
			);
			$do_aset_tidak_bergerak = DB_MODEL::update('asettidakbergerak', $where, $asettidakbergerak);
			if ($do_aset_tidak_bergerak->error)
				error("bermasalah pada update data aset tidak bergerak");

			$where = array(
				"IdTernak" => post('IdTernak', 'required|numberic'),
			);
			$do_ternak = DB_MODEL::update('ternak', $where, $ternak);
			if ($do_ternak->error)
				error("bermasalah pada update data ternak");

			$where = array(
				"IdProgram" => post('IdProgram', 'required|numberic'),
			);
			$do_program = DB_MODEL::update('program', $where, $program);
			if ($do_program->error)
				error("bermasalah pada update data program");
			else
				success("data berhasil diubah", []);
		}

		if ($jenisPenerima == "1") {
			// Data kartu identitas
			$paramKartuIdentitas = post('KartuIdentitas', 'required');
			$arrayKartuIdentitas = array(0, 0, 0, 0);
			for ($i = 0; $i < count($paramKartuIdentitas); $i++) {
				$valueKartuIdentitas = (int) $paramKartuIdentitas[$i];
				$arrayKartuIdentitas[$valueKartuIdentitas - 1] = 1;
			}
			$KartuIdentitas = array(
				'adaAktaKelahiran' => $arrayKartuIdentitas[0],
				'adaKartuPelajar' => $arrayKartuIdentitas[1],
				'adaKTP' => $arrayKartuIdentitas[2],
				'adaSIM' => $arrayKartuIdentitas[3]
			);
			$where = array(
				"idKartuIdentitas" => post('idKartuIdentitas', 'required|numberic'),
			);
			$do_kartu_identitas = DB_MODEL::update('kartuidentitas', $where, $KartuIdentitas);
			if ($do_kartu_identitas->error)
				error("bermasalah pada update data kartu identitas");

			// Data perorangan
			$perorangan = array(
				'NIK' => post('NIK', 'required|numberic'),
				'IdPengenalanTempat' => $Id_PengenalanTempat,
				'Nama' => post('Nama', 'required'),
				'NamaSLS' => post('RT', 'required|numberic') . '/' . post('RW', 'required|numberic'),
				'Alamat' => post('Alamat', 'required'),
				'HubKRT' => post('HubKRT', 'required|numberic'),
				'NoKK' => post('NoKK', 'required|numberic'),
				'JnsKel' => post('JnsKel', 'required|numberic'),
				'Umur' => post('Umur', 'required|numberic'),
				'StaKawin' => post('StaKawin', 'required|numberic'),
				'AktaNikah' => post('AktaNikah', 'required|numberic'),
				'AdaDiKK' => post('AdaDiKK', 'required|numberic'),
				// 'AdaKartuIdentitas' => $Id_KartuIdentitas,
				'StaHamil' => post('StaHamil', 'required|numberic'),
				'JenisCacat' => post('JenisCacat', 'required|numberic'),
				'PenyakitKronis' => post('PenyakitKronis', 'required|numberic'),
				'PartisipasiSekolah' => post('PartisipasiSekolah', 'required|numberic'),
				'PendidikanTertinggi' => post('PendidikanTertinggi', 'required|numberic'),
				'KelasTertinggi' => post('KelasTertinggi', 'required|numberic'),
				'IjazahTertinggi' => post('IjazahTertinggi', 'required|numberic'),
				'StaBekerja' => post('StaBekerja', 'required|numberic'),
				'LapanganUsaha' => post('LapanganUsaha', 'required|numberic'),
				'StatusPekerjaan' => post('StatusPekerjaan', 'required|numberic')
			);
			$where = array(
				"IdEkonomi" => post('IdEkonomi', 'required|numberic'),
			);
			$do_perorangan = DB_MODEL::update('perorangan', $where, $perorangan);
			if ($do_perorangan->error)
				error("bermasalah pada insert data perorangan");
			else
				success("data berhasil diubah", []);
		}
	}

	public function delete()
	{
		$where = array(
			"id_Survey" => post('id_Survey', 'required|numberic')
		);

		$do = DB_MODEL::update_straight('survey', $where, ['is_deleted' => 1]);
		if (!$do->error)
			success("data berhasil dihapus", $do->data);
		else
			error("data gagal dihapus");
	}
}
