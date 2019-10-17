<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Formulir extends CI_Model{
	function inputData($data){
		$pengenalantempat = array(
			'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'Kecamatan' => $data['Kecamatan'],
            'Keluarahan' => $data['Kelurahan'],
            'NamaSLS' => $data['NamaSLS'],
            'Alamat' => $data['Alamat'],
            'Tanggal' => $data['Tanggal']			
		);
		$this->db->insert("pengenalantempat", $pengenalantempat);
		$id = $this->db->insert_id();

		$perumahan = array(
            'id_Perumahan' => $data['id_Perumahan'],
            'StatusBangunan' => $data['StatusBangunan'],
            'StatusLahan' => $data['StatusLahan'],
            'LuasLantai' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
            'id_PengenalanTempat' => $data['id_PengenalanTempat'],
		);
		$kondisi_kronis = array(
			'diabetes' => $data['diabetes'],
			'identitas_id' => $id, 
			'jantung' => $data['jantung'],
			'stroke' => $data['stroke'],
			'darah_tinggi' => $data['darah_tinggi'],
			'kolesterol' => $data['kolesterol']
		);
		$daftar_keluhan = array(
			'nyeri_data' => $data['nyeri_data'],
			'identitas_id' => $id, 
			'lama_nyeri' => $data['lama_nyeri'],
			'tidak_sadar_nyeri' => $data['tidak_sadar_nyeri'],
			'kondisi_tidak_sadar' => $data['kondisi_tidak_sadar'],
			'meninggal' => $data['meninggal'],
			'kejang_kejang' => $data['kejang_kejang'],
			'lama_kejang' => $data['lama_kejang'],
			'tidak_sadar_kejang' => $data['tidak_sadar_kejang'],
			'lumpuh' => $data['lumpuh'],
			'bagian_lumpuh' => $data['bagian_lumpuh']
		);
		$konsumsi_tembakau = array(
			'kebiasaan_tembakau' => $data['kebiasaan_tembakau'],
			'identitas_id' => $id, 
			'jenis_tembakau' => $data['jenis_tembakau'],
			'jumlah_tembakau' => $data['jumlah_tembakau']
		);
		$rekaman_kesehatan = array(
			'pernah_periksa' => $data['pernah_periksa'],
			'identitas_id' => $id, 
			'tujuan_berobat' => $data['tujuan_berobat'],
			'nama_alamat_rs' => $data['nama_alamat_rs'],
			'dokter_memberi_sebab' => $data['dokter_memberi_sebab'],
			'kata_dokter' => $data['kata_dokter'],
			'rekaman_kesehatan' => $data['rekaman_kesehatan'],
			'melihat_rekaman' => $data['melihat_rekaman'],
			'tanggal_dua_kunjungan' => $data['tanggal_dua_kunjungan'],
			'tanggal_akhir_kunjungan' => $data['tanggal_akhir_kunjungan'],
			'catatan_dokter' => $data['catatan_dokter'],
			'surat_keterangan' => $data['surat_keterangan'],
			'lihat_surat' => $data['lihat_surat'],
			'sebab_utama' => $data['sebab_utama'],
			'sebab_pertama' => $data['sebab_pertama'],
			'sebab_kedua' => $data['sebab_kedua'],
			'sebab_ketiga' => $data['sebab_ketiga'],
			'sebab_lain' => $data['sebab_lain']
		);
		$this->db->insert("kecelakaan", $kecelakaan);
		$this->db->insert("kondisi_kronis", $kondisi_kronis);
		$this->db->insert("daftar_keluhan", $daftar_keluhan);
		$this->db->insert("konsumsi_tembakau", $konsumsi_tembakau);
		$this->db->insert("rekaman_kesehatan", $rekaman_kesehatan);
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