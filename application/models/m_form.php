<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Formulir extends CI_Model{
	function inputData($data){
		$pengenalantempat = array(
            'IdKecamatan' => $data['IdKecamatan'],
            'NamaSLS' => $data['NamaSLS'],
            'Alamat' => $data['Alamat'],
            'NamaKRT' => $data['NamaKRT'],
			'JumlahART' => $data['JumlahART'],	
			'JumlahKeluarga' => $data['JumlahKeluarga']		
		);
		$this->db->insert("pengenalantempat", $pengenalantempat);
		$Id_PengenalanTempat = $this->db->insert_id();

		$kecamatan = array(
            'NamaKecamatan' => $data['NamaKecamatan']
		);

		$this->db->insert("kecamatan", $kecamatan);
		$Id_Kecamatan = $this->db->insert_id();

		$kelurahan = array(
			'NamaKelurahan' => $data['NamaKelurahan'],
			'IdKecamatan' => $data['IdKecamatan']			
		);

		$this->db->insert("kelurahan", $kelurahan);
		$Id_Kelurahan = $this->db->insert_id();

		$perumahan = array(
            'StaBangunan' => $data['StaBangunan'],
            'StaLahan' => $data['StaLahan'],
            'LuasLantai' => $data['LuasLantai'],
            'Lantai' => $data['Lantai'],
			'Dinding' => $data['Dinding'],	
			'KondisiDinding' => $data['KondisiDinding'],		
			'Atap' => $data['Atap'],	
			'KondisiAtap' => $data['KondisiAtap'],		
			'JumlahKamar' => $data['JumlahKamar'],	
			'SumberAirminum' => $data['SumberAirminum'],		
			'MemperolehAirminum' => $data['MemperolehAirminum'],	
			'SumberPenerangan' => $data['SumberPenerangan'],		
			'Daya' => $data['Daya'],		
			'BahanMasak' => $data['BahanMasak'],	
			'FaslitasBAB' => $data['FasilitasBAB'],		
			'Kloset' => $data['Kloset'],	
			'BuangTinja' => $data['BuangTinja']		
		);
		$this->db->insert("perumahan", $perumahan);
		$Id_Perumahan = $this->db->insert_id();

		$optionperumahan = array(
			'Label' => $data['Label'],
			'IdKolom' => $data['IdKolom']
		);

		$this->db->insert("optionperumahan", $optionperumahan);
		$Id_OptionPerumahan = $this->db->insert_id();
	
		$ekonomi = array(
            'IdKeluarga' => $data['IdKeluarga']
		);

		$this->db->insert("ekonomi", $ekonomi);
		$Id_Ekonomi = $this->db->insert_id();

		$optionekonomi = array(
			'Label' => $data['Label'],
			'IdKolom' => $data['IdKolom']
		);

		$this->db->insert("optionekonomi", $optionekonomi);
		$Id_OptionEkonomi = $this->db->insert_id();

		$tanggunganpendidikan = array(
			'IdEkonomi' => $data['IdEkonomi'],
			'IdPengenalanTempat' => $data['IdPengenalanTempat'],
			'NamaSekolah' => $data['NamaSekolah'],
			'NISNNoKTM' => $data['NISNNoKTM']
		);

		$this->db->insert("tanggunganpendidikan", $tanggunganpendidikan);
		$Id_TanggunganPendidikan = $this->db->insert_id();

		$keluarga = array(
            'NIK' => $data['NIK'],
            'IdTanggunganPendidikan' => $data['IdTanggunganPendidikan'],
            'IdPengenalanTempat' => $data['IdPengenalanTempat'],
            'Nama' => $data['Nama'],
            'HubKRT' => $data['HubKRT'],
            'NoKK' => $data['NoKK'],
            'JnsKel' => $data['JnsKel'],
            'Umur' => $data['Umur'],
            'StaKawin' => $data['StaKawin'],
            'AktaNikah' => $data['AktaNikah'],
            'AdaDiKK' => $data['AdaDiKK'],
			'AdaKartuIdentitas' => $data['AdaKartuIdentitas'],
            'StaHamil' => $data['StaHamil'],
            'JenisCacat' => $data['JenisCacat'],
            'PenyakitKronis' => $data['PenyakitKronis'],
            'PartisipasiSekolah' => $data['PartisipasiSekolah'],
            'PendidikanTertinggi' => $data['PendidikanTertinggi'],
            'KelasTertinggi' => $data['KelasTertinggi'],
			'IjazahTertinggi' => $data['IjazahTertinggi'],
            'StaBekerja' => $data['StaBekerja'],
			'JumlahJamkerja' => $data['JumlahJamkerja'],
            'LapanganUsaha' => $data['LapanganUsaha'],
            'StatusPekerjaan' => $data['StatusPekerjaan']	
		);

		$this->db->insert("keluarga", $keluarga);
		$Id_Keluarga = $this->db->insert_id();

		$aset = array(
			'IdTernak' => $data['IdTernak'],
            'IdAsetTidakBergerak' => $data['IdAsetTidakBergerak'],
            'IdProgram' => $data['IdProgram'],
            'IdAsetBergerak' => $data['IdAsetBergerak']
		);

		$this->db->insert("aset", $aset);
		$Id_Aset = $this->db->insert_id();

		$optionaset = array(
			'IdAset' => $data['IdAset'],
			'Label' => $data['Label'],
			'IdKolom' => $data['IdKolom']
		);

		$this->db->insert("optionaset", $optionaset);
		$Id_OptionAset = $this->db->insert_id();

		$asetbergerak = array(
            'AdaTabungGas' => $data['AdaTabungGas'],
            'AdaLemariEs' => $data['AdaLemariEs'],
            'AdaAC' => $data['AdaAC'],
            'AdaPemanas' => $data['AdaPemanas'],
            'AdaTelepon' => $data['AdaTelepon'],
            'AdaTv' => $data['AdaTv'],
            'AdaEmas' => $data['AdaEmas'],
            'AdaLaptop' => $data['AdaLaptop'],
            'AdaSepeda' => $data['AdaSepeda'],
            'AdaMotor' => $data['AdaMotor'],
            'AdaMobil' => $data['AdaMobil'],
			'AdaPerahu' => $data['AdaPerahu'],
            'AdaMotorTempel' => $data['AdaMotorTempel'],
            'AdaPerahuMotor' => $data['AdaPerahuMotor'],
            'AdaKapal' => $data['AdaKapal']
		);

		$this->db->insert("asetbergerak", $asetbergerak);
		$Id_AsetBergerak = $this->db->insert_id();

		$asettidakbergerak = array(
            'AsetTakBergerak' => $data['AsetTakBergerak'],
            'LuasAtb' => $data['LuasAtb'],
            'RumahLain' => $data['RumahLain']
		);

		$this->db->insert("asettidakbergerak", $asettidakbergerak);
		$Id_AsetTidakBergerak = $this->db->insert_id();

		$ternak = array(
			'JumlahSapi' => $data['JumlahSapi'],
			'JumlahKerbau' => $data['JumlahKerbau'],
			'JumlahKuda' => $data['JumlahKuda'],
			'JumlahBabi' => $data['JumlahBabi'],
			'JumlahKambing' => $data['JumlahKambing']
		);

		$this->db->insert("ternak", $ternak);
		$Id_Ternak = $this->db->insert_id();

		$usaha = array(
			'IdAset' => $data['IdAset'],
			'IdJenisUsaha' => $data['IdJenisUsaha'],
			'StaAtUsaha' => $data['StaAtUsaha']
		);

		$this->db->insert("usaha", $usaha);
		$Id_Usaha = $this->db->insert_id();

		$jenisusaha = array(
            'IdUsah' => $data['IdUsah'],
            'IdEkonomi' => $data['IdEkonomi'],
            'JumlahPekerja' => $data['JumlahPekerja'],
            'TempatUsaha' => $data['TempatUsaha'],
            'OmsetUsaha' => $data['OmsetUsaha']
		);

		$this->db->insert("jenisusaha", $jenisusaha);
		$Id_JenisUsaha = $this->db->insert_id();

		$program = array(
			'StaKKS' => $data['StaKKS'],
			'StaKIP' => $data['StaKIP'],
			'StaKIS' => $data['StaKIS'],
			'StaBPJSMandiri' => $data['StaBPJSMandiri'],
			'StaJamsostek' => $data['StaJamsostek'],
			'StaAsuransi' => $data['StaAsuransi'],
			'StaPkh' => $data['StaPkh'],
			'Raskin' => $data['Raskin'],
			'StaKur' => $data['StaKur']
		);

		$this->db->insert("program", $program);
		$Id_Progam = $this->db->insert_id();

		$survey = array(
			'IdAset' => $data['IdAset'],
			'IdPengenalanTempat' => $data['IdPengenalanTempat'],
			'IdPerumahan' => $data['IdPerumahan'],
			'IdPetugas' => $data['IdPetugas'],
			'IdPengguna' => $data['IdPengguna'],
			'IdEkonom' => $data['IdEkonom']
		);

		$this->db->insert("survey", $survey);
		$Id_Survey = $this->db->insert_id();

		$pengguna = array(
			'KataSandi' => $data['KataSandi'],
			'NamaPengguna' => $data['NamaPengguna'],
			'Email' => $data['Email']
		);

		$this->db->insert("pengguna", $pengguna);
		$Id_Pengguna = $this->db->insert_id();
		
		$petugas = array(
			'TglPencacahan' => $data['TglPencacahan'],
			'NamaPencacahan' => $data['NamaPencacahan'],
			'TglPemeriksa' => $data['TglPemeriksa'],
			'NamaPemeriksa' => $data['NamaPemeriksa'],
			'HasilPencacahan' => $data['HasilPencacahan'],
		);

		$this->db->insert("petugas", $petugas);
		$Id_Petugas = $this->db->insert_id();

	}
	function readData($search, $limit, $start, $order_field, $order_ascdesc){
		$this->db->group_start();
		$this->db->like('nama_almarhum', $search); // Untuk menambahkan query where LIKE
		$this->db->or_like('id_smarthealth', $search);
		$this->db->or_like('nomor_telepon', $search);
		$this->db->or_like('kt.kebiasaan_tembakau', $search);
		$this->db->or_like('rk.pernah_periksa', $search);
		$this->db->order_by($order_field, $order_ascdesc);
		$this->db->group_end();
						 
		$this->db->limit($limit, $start);
		$this->db->join('konsumsi_tembakau kt', 'kt.identitas_id = dk.id');
		$this->db->join('rekaman_kesehatan rk', 'rk.identitas_id = dk.id');
		$this->db->join('pilihan_jawaban pjtbk', 'pjtbk.id_jawaban = kt.kebiasaan_tembakau');
		$this->db->join('pilihan_jawaban pjpp', 'pjpp.id_jawaban = rk.pernah_periksa');
		$this->db->select('dk.id, nama_almarhum, id_smarthealth, nomor_telepon, dk.status, pjtbk.label kebiasaan_tembakau, pjpp.label pernah_periksa');
		$this->db->from('identitas dk');
		$this->db->where('dk.status',1);
		return $this->db->get()->result_array();
	} 
	function readVerifikasi($search, $limit, $start, $order_field, $order_ascdesc){
		$this->db->group_start();
		$this->db->like('nama_almarhum', $search); // Untuk menambahkan query where LIKE
		$this->db->or_like('id_smarthealth', $search);
		$this->db->or_like('nomor_telepon', $search);
		$this->db->or_like('kt.kebiasaan_tembakau', $search);
		$this->db->or_like('rk.pernah_periksa', $search);
		$this->db->order_by($order_field, $order_ascdesc);
		$this->db->group_end();
						 
		$this->db->limit($limit, $start);
		$this->db->join('konsumsi_tembakau kt', 'kt.identitas_id = dk.id');
		$this->db->join('rekaman_kesehatan rk', 'rk.identitas_id = dk.id');
		$this->db->join('pilihan_jawaban pjtbk', 'pjtbk.id_jawaban = kt.kebiasaan_tembakau');
		$this->db->join('pilihan_jawaban pjpp', 'pjpp.id_jawaban = rk.pernah_periksa');
		$this->db->select('dk.id, nama_almarhum, id_smarthealth, nomor_telepon, dk.status, pjtbk.label kebiasaan_tembakau, pjpp.label pernah_periksa');
		$this->db->from('identitas dk');
		$this->db->where('dk.status',0);
		return $this->db->get()->result_array();
	} 
	function updateVerifikasi($id_user, $catatan){
		$data_user = array(
			'status' => 1,
			'catatan' => $catatan
			 );
		$this->db->where("id", $id_user);
		$this->db->update("identitas", $data_user);
	}
	public function getDataById($id){
		$this->db->where('idts.id', $id);
		$this->db->join('kecelakaan kc', 'kc.identitas_id = idts.id');
		$this->db->join('kondisi_kronis kk', 'kk.identitas_id = idts.id');
		$this->db->join('daftar_keluhan dk', 'dk.identitas_id = idts.id');
		$this->db->join('konsumsi_tembakau kt', 'kt.identitas_id = idts.id');
		$this->db->join('rekaman_kesehatan rk', 'rk.identitas_id = idts.id');
		return $this->db->get('identitas idts')->result_array();
	}
	function updateData($id_kematian){
		$data_kematian = array(
			//identitas
			'nama_almarhum' => $this->input->post('edit_nama_almarhum'),
			'alamat_almarhum' => $this->input->post('edit_alamat_almarhum'),
			'rt' => $this->input->post('edit_rt'),
			'rw' => $this->input->post('edit_rw'),
			'id_smarthealth' => $this->input->post('edit_id_smarthealth'),
			'tanggal_kematian' => $this->input->post('edit_tanggal_kematian'),
			'nama_keluarga' => $this->input->post('edit_nama_keluarga'),
			'hubungan' => $this->input->post('edit_hubungan'),
			'nomor_telepon' => $this->input->post('edit_nomor_telepon'),
			'kader_pewawancara' => $this->input->post('edit_kader_pewawancara'),
			'tanggal_wawancara' => $this->input->post('edit_tanggal_wawancara')
			 );
		$this->db->where("id", $id_kematian);
		$this->db->update("identitas", $data_kematian);

		$data_kecelakaan = array(
			//kecelakaan
			'alami_kecelakaan' => $this->input->post('edit_alami_kecelakaan'),
			'deskripsi_kecelakaan' => $this->input->post('edit_deskripsi_kecelakaan')
		);
		$this->db->where("identitas_id", $id_kematian);
		$this->db->update("kecelakaan", $data_kecelakaan);

		$data_kondisi_kronis = array(
			//kondisi_kronis
			'diabetes' => $this->input->post('edit_diabetes'),
			'jantung' => $this->input->post('edit_jantung'),
			'stroke' => $this->input->post('edit_stroke'),
			'darah_tinggi' => $this->input->post('edit_darah_tinggi'),
			'kolesterol' => $this->input->post('edit_kolesterol')
		);
		$this->db->where("identitas_id", $id_kematian);
		$this->db->update("kondisi_kronis", $data_kondisi_kronis);


		$data_daftar_keluhan = array(
			//daftar keluhan
			'nyeri_data' => $this->input->post('edit_nyeri_data'),
			'lama_nyeri' => $this->input->post('edit_lama_nyeri'),
			'tidak_sadar_nyeri' => $this->input->post('edit_tidak_sadar_nyeri'),
			'kondisi_tidak_sadar' => $this->input->post('edit_kondisi_tidak_sadar'),
			'meninggal' => $this->input->post('edit_meninggal'),
			'kejang_kejang' => $this->input->post('edit_kejang_kejang'),
			'lama_kejang' => $this->input->post('edit_lama_kejang'),
			'tidak_sadar_kejang' => $this->input->post('edit_tidak_sadar_kejang'),
			'lumpuh' => $this->input->post('edit_lumpuh'),
			'bagian_lumpuh' => $this->input->post('edit_bagian_lumpuh')
		);
		$this->db->where("identitas_id", $id_kematian);
		$this->db->update("daftar_keluhan", $data_daftar_keluhan);


		$data_konsumsi_tembakau = array(
					//konsumsi tembakau
					'kebiasaan_tembakau' => $this->input->post('edit_kebiasaan_tembakau'),
					'jenis_tembakau' => $this->input->post('edit_jenis_tembakau'),
					'jumlah_tembakau' => $this->input->post('edit_jumlah_tembakau')
		);
		$this->db->where("identitas_id", $id_kematian);
		$this->db->update("konsumsi_tembakau", $data_konsumsi_tembakau);
	
		$data_rekaman_kesehatan = array(
			//rekaman kesehatan
			'pernah_periksa' => $this->input->post('edit_pernah_periksa'),
			'tujuan_berobat' => $this->input->post('edit_tujuan_berobat'),
			'nama_alamat_rs' => $this->input->post('edit_nama_alamat_rs'),
			'dokter_memberi_sebab' => $this->input->post('edit_dokter_memberi_sebab'),
			'kata_dokter' => $this->input->post('edit_kata_dokter'),
			'rekaman_kesehatan' => $this->input->post('edit_rekaman_kesehatan'),
			'melihat_rekaman' => $this->input->post('edit_melihat_rekaman'),
			'tanggal_dua_kunjungan' => $this->input->post('edit_tanggal_dua_kunjungan'),
			'tanggal_akhir_kunjungan' => $this->input->post('edit_tanggal_akhir_kunjungan'),
			'catatan_dokter' => $this->input->post('edit_catatan_dokter'),
			'surat_keterangan' => $this->input->post('edit_surat_keterangan'),
			'lihat_surat' => $this->input->post('edit_lihat_surat'),
			'sebab_utama' => $this->input->post('edit_sebab_utama'),
			'sebab_pertama' => $this->input->post('edit_sebab_pertama'),
			'sebab_kedua' => $this->input->post('edit_sebab_kedua'),
			'sebab_ketiga' => $this->input->post('edit_sebab_ketiga'),
			'sebab_lain' => $this->input->post('edit_sebab_lain')	 
		);
		$this->db->where("identitas_id", $id_kematian);
		$this->db->update("rekaman_kesehatan", $data_rekaman_kesehatan);
	}
	public function deleteData($id){
		$this->db->where('identitas_id', $id);
		$this->db->delete('kondisi_kronis'); // Untuk mengeksekusi perintah delete data
		$this->db->where('identitas_id', $id);
		$this->db->delete('konsumsi_tembakau'); // Untuk mengeksekusi perintah delete data
		$this->db->where('identitas_id', $id);
		$this->db->delete('daftar_keluhan'); // Untuk mengeksekusi perintah delete data
		$this->db->where('identitas_id', $id);
		$this->db->delete('kecelakaan'); // Untuk mengeksekusi perintah delete data

    $this->db->where('id', $id);
    $this->db->delete('identitas'); // Untuk mengeksekusi perintah delete data
	}




	public function count_all(){
	    return $this->db->count_all(); // Untuk menghitung semua data siswa
	}
	public function count_filter($search){
		
		$this->db->group_start();
		$this->db->like('nama_almarhum', $search); // Untuk menambahkan query where LIKE
		$this->db->or_like('id_smarthealth', $search);
		$this->db->or_like('nomor_telepon', $search);
		$this->db->or_like('kt.kebiasaan_tembakau', $search);
		$this->db->or_like('rk.pernah_periksa', $search);
	
		$this->db->group_end();
						 
		$this->db->join('konsumsi_tembakau kt', 'kt.identitas_id = dk.id');
		$this->db->join('rekaman_kesehatan rk', 'rk.identitas_id = dk.id');
		$this->db->join('pilihan_jawaban pjtbk', 'pjtbk.id_jawaban = kt.kebiasaan_tembakau');
		$this->db->join('pilihan_jawaban pjpp', 'pjpp.id_jawaban = rk.pernah_periksa');
		$this->db->select('dk.id, nama_almarhum, id_smarthealth, nomor_telepon, dk.status, pjtbk.label kebiasaan_tembakau, pjpp.label pernah_periksa');
		$this->db->from('identitas dk');
		$this->db->where('dk.status',1);

		
		return $this->db->get()->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
	}
	public function count_filter_verifikasi($search){
		
		$this->db->group_start();
		$this->db->like('nama_almarhum', $search); // Untuk menambahkan query where LIKE
		$this->db->or_like('id_smarthealth', $search);
		$this->db->or_like('nomor_telepon', $search);
		$this->db->or_like('kt.kebiasaan_tembakau', $search);
		$this->db->or_like('rk.pernah_periksa', $search);
		$this->db->group_end();
						 
		$this->db->join('konsumsi_tembakau kt', 'kt.identitas_id = dk.id');
		$this->db->join('rekaman_kesehatan rk', 'rk.identitas_id = dk.id');
		$this->db->join('pilihan_jawaban pjtbk', 'pjtbk.id_jawaban = kt.kebiasaan_tembakau');
		$this->db->join('pilihan_jawaban pjpp', 'pjpp.id_jawaban = rk.pernah_periksa');
		$this->db->select('dk.id, nama_almarhum, id_smarthealth, nomor_telepon, dk.status, pjtbk.label kebiasaan_tembakau, pjpp.label pernah_periksa');
		$this->db->from('identitas dk');
		$this->db->where('dk.status',0);
	
		return $this->db->get()->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
	}

}