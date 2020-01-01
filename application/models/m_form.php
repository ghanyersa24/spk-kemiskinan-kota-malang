<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_form extends CI_Model{
	function inputData($data){
		$jenisPenerima = $data['JenisPenerima'];

		$Id_PengenalanTempat = 0;
		$Id_Perumahan = 0;
		$Id_Aset = 0;
		if($jenisPenerima == "2"){
			$pengenalantempat = array(
				'IdKecamatan' => $data['Kecamatan'],
				'IdKelurahan' => $data['Kelurahan'],
				'NamaSLS' => $data['RT'].'/'.$data['RW'],
				'Alamat' => $data['Alamat'],
				'NamaKRT' => $data['Nama1']		
			);
			$this->db->insert("pengenalantempat", $pengenalantempat);
			$Id_PengenalanTempat = $this->db->insert_id();
	 
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

			
			$paramAssetBergerak = $data['AssetBergerak'];
			$arrayAssetBergerak = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );
			for ($i=0; $i < count($paramAssetBergerak) ; $i++) { 
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
			$this->db->insert("asetbergerak", $asetbergerak);
			$Id_AsetBergerak = $this->db->insert_id();


			$asettidakbergerak = array(
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

			
			$paramKartuPemerintah = $data['KartuPemerintah'];
			$arrayKartuPemerintah = array( 0, 0, 0, 0, 0, 0, 0, 0, 0 );
			for ($i=0; $i < count($paramKartuPemerintah) ; $i++) { 
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
			$this->db->insert("program", $program);
			$Id_Progam = $this->db->insert_id();


			$aset = array(
				'IdAsetTidakBergerak' => $Id_AsetTidakBergerak,
				'IdAsetBergerak' => $Id_AsetBergerak,
				'IdProgram' => $Id_Progam,
				'IdTernak' => $Id_Ternak
			);
			$this->db->insert("aset", $aset);
			$Id_Aset = $this->db->insert_id();
		}

		$Id_Perorangan = 0;
		if($jenisPenerima == "1"){
			$paramKartuIdentitas = $data['KartuIdentitas'];
			$arrayKartuIdentitas = array(0, 0, 0, 0);
			for ($i=0; $i < count($paramKartuIdentitas) ; $i++) { 
				$valueKartuIdentitas = (int) $paramKartuIdentitas[$i];
				$arrayKartuIdentitas[$valueKartuIdentitas - 1] = 1;
			}
			$KartuIdentitas = array(
				'adaAktaKelahiran' => $arrayKartuIdentitas[0],
				'adaKartuPelajar' => $arrayKartuIdentitas[1],
				'adaKTP' => $arrayKartuIdentitas[2],
				'adaSIM' => $arrayKartuIdentitas[3]
			);
			$this->db->insert("kartuidentitas", $KartuIdentitas);
			$Id_KartuIdentitas = $this->db->insert_id();
	
	
			$perorangan = array(
				'NIK' => $data['NIK'],
				'IdPengenalanTempat' => $Id_PengenalanTempat,
				'Nama' => $data['Nama'],
				'NamaSLS' => $data['RT1'].'/'.$data['RW1'],
				'Alamat' => $data['Alamat1'],
				'HubKRT' => $data['HubKRT'],
				'NoKK' => $data['NoKeluarga'],
				'JnsKel' => $data['JenisKlamin'],
				'Umur' => $data['Umur'],
				'StaKawin' => $data['StatusPerkawinan'],
				'AktaNikah' => $data['KepemilikanBukuNikah'],
				'AdaDiKK' => $data['TercantumDalamKertuKeluarga'],
				'AdaKartuIdentitas' => $Id_KartuIdentitas,
				'StaHamil' => $data['StaHamil'],
				'JenisCacat' => $data['JenisCacat'],
				'PenyakitKronis' => $data['PenyakitKronis'],
				'PartisipasiSekolah' => $data['PartisipasiSekolah'],
				'PendidikanTertinggi' => $data['JenjangPendidikanTertinggi'],
				'KelasTertinggi' => $data['KelasTertinggi'],
				'IjazahTertinggi' => $data['IjazahTertinggi'],
				'StaBekerja' => $data['StatusBekerja'],
				'LapanganUsaha' => $data['LapanganPekerjaan'],
				'StatusPekerjaan' => $data['StatusKedudukanPekerjaan']	
			);
			$this->db->insert("perorangan", $perorangan);
			$Id_Perorangan = $this->db->insert_id();
		}
		
		$petugas = array(
			'TglPemeriksa' => $data['Tanggal'],
			'IdPemeriksa' => 1,
		);
		$this->db->insert("petugas", $petugas);
		$Id_Petugas = $this->db->insert_id();

		$survey = array(
			'IdAset' => $Id_Aset,
			'IdJenisPenerima' => $jenisPenerima,
			'IdPengenalanTempat' => $Id_PengenalanTempat,
			'IdPerumahan' => $Id_Perumahan,
			'IdPetugas' => $Id_Petugas,
			'IdEkonomi' => $Id_Perorangan
		);
		$this->db->insert("survey", $survey);
		$Id_Survey = $this->db->insert_id();

		$return = array(
			'Success' => true,
			'Info' => 'Data Berhasil Disimpan'
		);
		return $return;
	}

	public function filter_alternatif($search, $limit, $start, $order_field, $order_ascdesc){
		$this->db->like('pr.Nama', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pt.NamaKRT', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pr.Alamat', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pt.Alamat', $search); // Untuk menambahkan query where OR LIKE
		$this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
		$this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
		$this->db->join('perorangan pr', 'pr.IdEkonomi = sr.IdEkonomi', 'left');
		$this->db->join('pengenalantempat pt', 'pt.IdPengenalanTempat = sr.IdPengenalanTempat', 'left');
		$this->db->join('petugas ptgs', 'ptgs.IdPetugas = sr.IdPetugas', 'left');
		$this->db->select('sr.id_survey, sr.IdJenisPenerima, pr.Nama NamaPerorangan, pt.NamaKRT NamaKeluarga, pr.Alamat AlamatPerorangan, pt.Alamat AlamatKeluarga, ptgs.TglPemeriksa ' );
		return $this->db->get('survey sr')->result_array(); // Eksekusi query sql sesuai kondisi diatas
	}

	public function count_all_alternatif(){
			return $this->db->count_all('survey'); // Untuk menghitung semua data siswa
	}
	public function count_filter_alternatif($search){
		$this->db->like('pr.Nama', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pt.NamaKRT', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pr.Alamat', $search); // Untuk menambahkan query where OR LIKE
		$this->db->or_like('pt.Alamat', $search); // Untuk menambahkan query where OR LIKE
		$this->db->join('perorangan pr', 'pr.IdEkonomi = sr.IdEkonomi', 'left');
		$this->db->join('pengenalantempat pt', 'pt.IdPengenalanTempat = sr.IdPengenalanTempat', 'left');
		return $this->db->get('survey sr')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
	}



	public function filter_subkriteria($search, $limit, $start, $order_field, $order_ascdesc, $indikator){
		$this->db->select('s.id, i.label indikator, k.label kriteria, s.label subkriteria, b.bobot' );
		$this->db->from('subkriteria s');
		$this->db->join('kriteria k', 'k.id = s.id_kriteria', 'left');
		$this->db->join('indikator i', 'i.id = k.id_indikator', 'left');
		$this->db->join('bobot b', 'b.id_subkriteria = s.id', 'left');
		$this->db->where('i.id', $indikator );
		$this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
		$this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
		return $this->db->get()->result_array(); // Eksekusi query sql sesuai kondisi diatas
	}

	public function count_all_subkriteria($indikator){
			$this->db->join('kriteria k', 'k.id = s.id_kriteria', 'left');
			$this->db->join('indikator i', 'i.id = k.id_indikator', 'left');
			$this->db->join('bobot b', 'b.id_subkriteria = s.id', 'left');
			$this->db->where('i.id', $indikator );
			$this->db->select('s.id, i.label indikator, k.label kriteria, s.label subkriteria, b.bobot' );
			return $this->db->count_all('subkriteria s'); // Untuk menghitung semua data siswa
	}

	public function count_filter_subkriteria($search, $indikator){
		$this->db->select('s.id, i.label indikator, k.label kriteria, s.label subkriteria, b.bobot' );
		$this->db->from('subkriteria s');
		$this->db->join('kriteria k', 'k.id = s.id_kriteria', 'left');
		$this->db->join('indikator i', 'i.id = k.id_indikator', 'left');
		$this->db->join('bobot b', 'b.id_subkriteria = s.id', 'left');
		$this->db->where('i.id', $indikator );	
		return $this->db->get()->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
	}


	

	public function filter_indikator($search, $limit, $start, $order_field, $order_ascdesc){
		$query = $this->db->query("SELECT i.id, i.label, ( SELECT SUM(b.bobot) bobot 
											FROM bobot b 
											JOIN subkriteria s 
											ON s.id = b.id_subkriteria 
											JOIN kriteria k 
											ON k.id = s.id_kriteria 
											WHERE k.id_indikator = i.id) bobot
									from indikator i
									ORDER BY bobot DESC");
		return $query->result_array(); // Eksekusi query sql sesuai kondisi diatas
	}

	public function count_all_indikator(){
		$query = $this->db->query("SELECT i.id, i.label, ( SELECT SUM(b.bobot) bobot 
											FROM bobot b 
											JOIN subkriteria s 
											ON s.id = b.id_subkriteria 
											JOIN kriteria k 
											ON k.id = s.id_kriteria 
											WHERE k.id_indikator = i.id) bobot
									from indikator i
									ORDER BY bobot DESC");
			return $query->num_rows(); // Untuk menghitung semua data siswa
	}

	public function count_filter_indikator($search){
		$query = $this->db->query("SELECT i.id, i.label, ( SELECT SUM(b.bobot) bobot 
											FROM bobot b 
											JOIN subkriteria s 
											ON s.id = b.id_subkriteria 
											JOIN kriteria k 
											ON k.id = s.id_kriteria 
											WHERE k.id_indikator = i.id) bobot
									from indikator i
									ORDER BY bobot DESC");
		return $query->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
	}

	public function getSisaBobot(){
		$this->db->where("id_subkriteria", 210);
		return $this->db->get('bobot')->result_array();
	}


	public function getdetailpenerima( $id_jenis, $id_survey ){
		$return = array();
		switch($id_jenis){
			case 1:
				$this->db->where('s.id_survey', $id_survey );
				$this->db->join('perorangan pr', 'pr.IdEkonomi = s.IdEkonomi', 'left');
				$this->db->select('pr.IdEkonomi, pr.NIK, pr.Nama, pr.NamaSLS, pr.Alamat, 
				pr.HubKRT, pr.NoKK, pr.JnsKel, pr.Umur, pr.StaKawin, 
				pr.AktaNikah, pr.AdaDiKK, pr.AdaKartuIdentitas, pr.StaHamil, 
				pr.JenisCacat, pr.PenyakitKornis, pr.PartisipasiSekolah, 
				pr.PendidikanTertnggi, pr.KelasTertinggi, pr.IjazahTertinggi, 
				pr.StaBekerja, pr.LapanganUsaha, pr.StatusPekerjaan');
				$return = $this->db->get('survey s')->result_array();
				break;
			case 2:
				
				break;
		}
		return $return;
	}

}