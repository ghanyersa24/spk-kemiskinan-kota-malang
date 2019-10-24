<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_form extends CI_Model{
	function inputData($data){
		$pengenalantempat = array(
            'IdKecamatan' => $data['Kecamatan'],
            'NamaSLS' => $data['RT'].'/'.$data['RW'],
            'Alamat' => $data['Alamat'],
            'NamaKRT' => $data['Nama'],
			'JumlahART' => 2,	
			'JumlahKeluarga' => 2		
		);
		$this->db->insert("pengenalantempat", $pengenalantempat);
		$Id_PengenalanTempat = $this->db->insert_id();

		// $kecamatan = array(
        //     'NamaKecamatan' => $data['NamaKecamatan']
		// );

		// $this->db->insert("kecamatan", $kecamatan);
		// $Id_Kecamatan = $this->db->insert_id();

		// $kelurahan = array(
		// 	'NamaKelurahan' => $data['NamaKelurahan'],
		// 	'IdKecamatan' => $data['IdKecamatan']			
		// );

		// $this->db->insert("kelurahan", $kelurahan);
		// $Id_Kelurahan = $this->db->insert_id();

		$perumahan = array(
            'StaBangunan' => $data['Bangunan'],
            'StaLahan' => $data['Lahan'],
            'LuasLantai' => $data['LuasLantai'],
            'Lantai' => $data['JenisLantai'],
			'Dinding' => $data['JenisDinding'],	
			'KondisiDinding' => $data['KondisiDinding'],		
			'Atap' => $data['JenisAtap'],	
			'KondisiAtap' => $data['KondisiAtap'],		
			'JumlahKamar' => $data['JmlKamarTidur'],	
			'SumberAirminum' => $data['SumberAirMinum'],		
			'MemperolehAirminum' => $data['MemperolehAirMinum'],	
			'SumberPenerangan' => $data['PeneranganUtama'],		
			'Daya' => $data['DayaPenerangan'],		
			'BahanMasak' => $data['BahanBakarMasak'],	
			'FasilitasBAB' => $data['FasilitasBAB'],		
			'Kloset' => $data['JenisKloset'],	
			'BuangTinja' => $data['TempatPembuanganTinja']		
		);
		$this->db->insert("perumahan", $perumahan);
		$Id_Perumahan = $this->db->insert_id();

		// $optionperumahan = array(
		// 	'Label' => $data['Label'],
		// 	'IdKolom' => $data['IdKolom']
		// );

		// $this->db->insert("optionperumahan", $optionperumahan);
		// $Id_OptionPerumahan = $this->db->insert_id();
	
		// $ekonomi = array(
        //     'IdKeluarga' => $data['IdKeluarga']
		// );

		// $this->db->insert("ekonomi", $ekonomi);
		// $Id_Ekonomi = $this->db->insert_id();

		// $optionekonomi = array(
		// 	'Label' => $data['Label'],
		// 	'IdKolom' => $data['IdKolom']
		// );

		// $this->db->insert("optionekonomi", $optionekonomi);
		// $Id_OptionEkonomi = $this->db->insert_id();

		// $tanggunganpendidikan = array(
		// 	'IdEkonomi' => $data['IdEkonomi'],
		// 	'IdPengenalanTempat' => $data['IdPengenalanTempat'],
		// 	'NamaSekolah' => $data['NamaSekolah'],
		// 	'NISNNoKTM' => $data['NISNNoKTM']
		// );

		// $this->db->insert("tanggunganpendidikan", $tanggunganpendidikan);
		// $Id_TanggunganPendidikan = $this->db->insert_id();

		$keluarga = array(
            'NIK' => $data['NIK'],
            'IdTanggunganPendidikan' => 1,
            'IdPengenalanTempat' => $Id_PengenalanTempat,
            'Nama' => $data['Nama'],
            'HubKRT' => $data['HubKRT'],
            'NoKK' => $data['NoKeluarga'],
            'JnsKel' => $data['JenisKlamin'],
            'Umur' => $data['Umur'],
            'StaKawin' => $data['StatusPerkawinan'],
            'AktaNikah' => $data['KepemilikanBukuNikah'],
            'AdaDiKK' => $data['TercantumDalamKertuKeluarga'],
			'AdaKartuIdentitas' => "1,2",
            'StaHamil' => $data['StaHamil'],
            'JenisCacat' => $data['JenisCacat'],
            'PenyakitKronis' => $data['PenyakitKronis'],
            'PartisipasiSekolah' => $data['PartisipasiSekolah'],
            'PendidikanTertinggi' => $data['JenjangPendidikanTertinggi'],
            'KelasTertinggi' => $data['KelasTertinggi'],
			'IjazahTertinggi' => $data['IjazahTertinggi'],
            'StaBekerja' => $data['StatusBekerja'],
			// 'JumlahJamkerja' => $data['JumlahJamkerja'],
            'LapanganUsaha' => $data['LapanganPekerjaan'],
            'StatusPekerjaan' => $data['StatusKedudukanPekerjaan']	
		);

		$this->db->insert("keluarga", $keluarga);
		$Id_Keluarga = $this->db->insert_id();

		// $aset = array(
		// 	'IdTernak' => $data['IdTernak'],
        //     'IdAsetTidakBergerak' => $data['IdAsetTidakBergerak'],
        //     'IdProgram' => $data['IdProgram'],
        //     'IdAsetBergerak' => $data['IdAsetBergerak']
		// );

		// $this->db->insert("aset", $aset);
		// $Id_Aset = $this->db->insert_id();

		// $optionaset = array(
		// 	'IdAset' => $data['IdAset'],
		// 	'Label' => $data['Label'],
		// 	'IdKolom' => $data['IdKolom']
		// );

		// $this->db->insert("optionaset", $optionaset);
		// $Id_OptionAset = $this->db->insert_id();

		$paramAssetBergerak = $data['AssetBergerak'];
		$splitAssetBergerak = explode(",", $paramAssetBergerak);

		$arrayAssetBergerak = array();
		for ($i=0; $i < 15 ; $i++) { 
			if( $i < count($splitAssetBergerak) ){
				if( $i."" == $splitAssetBergerak[$i] ){
					$arrayAssetBergerak[$i] = 1;
				}else{
					$arrayAssetBergerak[$i] = 0;
				}
			}else{
				$arrayAssetBergerak[$i] = 0;
			}
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

		$this->db->insert("asetbergerak", $asetbergerak);
		$Id_AsetBergerak = $this->db->insert_id();

		$asettidakbergerak = array(
            // 'AsetTakBergerak' => $data['AsetTakBergerak'],
            'LuasAtb' => $data['Lahan'],
            'RumahLain' => $data['Rumah']
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

		// $usaha = array(
		// 	'IdAset' => $data['IdAset'],
		// 	'IdJenisUsaha' => $data['IdJenisUsaha'],
		// 	'StaAtUsaha' => $data['StaAtUsaha']
		// );

		// $this->db->insert("usaha", $usaha);
		// $Id_Usaha = $this->db->insert_id();

		// $jenisusaha = array(
        //     'IdUsah' => $data['IdUsah'],
        //     'IdEkonomi' => $data['IdEkonomi'],
        //     'JumlahPekerja' => $data['JumlahPekerja'],
        //     'TempatUsaha' => $data['TempatUsaha'],
        //     'OmsetUsaha' => $data['OmsetUsaha']
		// );

		// $this->db->insert("jenisusaha", $jenisusaha);
		// $Id_JenisUsaha = $this->db->insert_id();

		

		// $paramKartuPemerintah = $data['KartuPemerintah[]'];
		// $splitKartuPemerintah = explode(",", $paramKartuPemerintah);

		// $arrayKartuPemerintah = array();
		// for ($i=0; $i < 9 ; $i++) { 
		// 	if( $i < count($splitKartuPemerintah) ){
		// 		if( $i."" == $splitKartuPemerintah[$i] ){
		// 			$arrayKartuPemerintah[$i] = 1;
		// 		}else{
		// 			$arrayKartuPemerintah[$i] = 0;
		// 		}
		// 	}else{
		// 		$arrayKartuPemerintah[$i] = 0;
		// 	}
		// }


		// $program = array(
		// 	'StaKKS' => $arrayKartuPemerintah[0],
		// 	'StaKIP' => $arrayKartuPemerintah[1],
		// 	'StaKIS' => $arrayKartuPemerintah[2],
		// 	'StaBPJSMandiri' => $arrayKartuPemerintah[3],
		// 	'StaJamsostek' => $arrayKartuPemerintah[4],
		// 	'StaAsuransi' => $arrayKartuPemerintah[5],
		// 	'StaPkh' => $arrayKartuPemerintah[6],
		// 	'Raskin' => $arrayKartuPemerintah[7],
		// 	'StaKur' => $arrayKartuPemerintah[8]
		// );

		// $this->db->insert("program", $program);
		// $Id_Progam = $this->db->insert_id();

		$survey = array(
			'IdAset' => 1,
			'IdPengenalanTempat' => $Id_PengenalanTempat,
			'IdPerumahan' => $Id_Perumahan,
			'IdPetugas' => 1,
			'IdPengguna' => 1,
			'IdEkonomi' => 1
		);

		$this->db->insert("survey", $survey);
		$Id_Survey = $this->db->insert_id();

		// $pengguna = array(
		// 	'KataSandi' => $data['KataSandi'],
		// 	'NamaPengguna' => $data['NamaPengguna'],
		// 	'Email' => $data['Email']
		// );

		// $this->db->insert("pengguna", $pengguna);
		// $Id_Pengguna = $this->db->insert_id();
		
		// $petugas = array(
		// 	'TglPencacahan' => $data['TglPencacahan'],
		// 	'NamaPencacahan' => $data['NamaPencacahan'],
		// 	'TglPemeriksa' => $data['TglPemeriksa'],
		// 	'NamaPemeriksa' => $data['NamaPemeriksa'],
		// 	'HasilPencacahan' => $data['HasilPencacahan'],
		// );

		// $this->db->insert("petugas", $petugas);
		// $Id_Petugas = $this->db->insert_id();

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