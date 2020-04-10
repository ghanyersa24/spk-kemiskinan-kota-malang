<div class="modal fade" id="view-perorangan" role="dialog">
	<div class="modal-dialog modal-xl">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> <span id="title-modal-penerima"> Detail Data Penerima - Perorangan</span></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id="form-perorangan">
					<input type="number" id="view-id_Survey" name="id_Survey" readonly hidden>
					<input type="number" id="view-IdJenisPenerima" name="IdJenisPenerima" readonly hidden>
					<input type="number" id="view-IdEkonomi" name="IdEkonomi" readonly hidden>
					<input type="number" id="view-idKartuIdentitas" name="idKartuIdentitas" readonly hidden>
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-identity-tab" data-toggle="pill" href="#pills-identity" role="tab" aria-controls="pills-identity" aria-selected="true">Identitas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-kesehatan-tab" data-toggle="pill" href="#pills-kesehatan" role="tab" aria-controls="pills-kesehatan" aria-selected="false">Kesehatan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-pendidikan-tab" data-toggle="pill" href="#pills-pendidikan" role="tab" aria-controls="pills-pendidikan" aria-selected="false">Pendidikan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-ekonomi-tab" data-toggle="pill" href="#pills-ekonomi" role="tab" aria-controls="pills-ekonomi" aria-selected="false">Ekonomi</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-identity" role="tabpanel" aria-labelledby="pills-identity-tab">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Identitas Perorangan</h3>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Nama</label><br>
												<input type="text" class="form-control" id="view-Nama" name="Nama" placeholder="Masukan nama anggota rumah tangga" required="required">
											</div>

											<div class="form-group">
												<label>NIK</label>
												<input type="number" class="form-control" id="view-NIK" name="NIK" placeholder="Masukan NIK anggota rumah tangga" required="required">
											</div>

											<div class="form-group">
												<label>Hubungan dengan kepala rumah tangga</label>
												<select class="form-control" style="width: 100%;" id="view-HubKRT" name="HubKRT" required="required">
													<option selected="selected" disabled> Masukan hubungan kepala rumah tangga</option>
													<option value="1">1. Kepala rumah tangga</option>
													<option value="2">2. Istri/suami</option>
													<option value="3">3. Anak</option>
													<option value="4">4. Menantu</option>
													<option value="5">5. Cucu</option>
													<option value="6">6. Orang tua/mertua</option>
													<option value="7">7. Pumbantu Ruta</option>
													<option value="8">8. Lainnya</option>
												</select>
											</div>

											<div class="form-group">
												<label>Nomor urut keluarga</label>
												<input type="number" class="form-control" id="view-NoKK" name="NoKK" placeholder="Masukan nomor urut keluarga" required="required">
											</div>
											<div class="row">
												<div class="form-group col">
													<label>Jenis kelamin</label>
													<select class="form-control" style="width: 100%;" id="view-JnsKel" name="JnsKel" required="required">
														<option selected="selected" disabled=> Masukkan jenis kelamin</option>
														<option value="1">1. Laki-Laki</option>
														<option value="2">2. Perempuan</option>
													</select>
												</div>

												<div class="form-group col">
													<label>Umur</label>
													<input type="number" class="form-control" id="view-Umur" name="Umur" placeholder="Masukan umur anda" required="required">
												</div>

											</div>
										</div>
										<div class="col-md-8">

											<div class="form-row">
												<div class="form-group col-md-8">
													<label for="inputCity">Alamat</label>
													<input type="text" class="form-control" id="view-Alamat" name="Alamat" required="required">
												</div>

												<div class="form-group col-md-2">
													<label for="inputZip">RT</label>
													<input type="number" class="form-control" id="view-RT" name="RT" required="required">
												</div>

												<div class="form-group col-md-2">
													<label for="inputZip">RW</label>
													<input type="number" class="form-control" id="view-RW" name="RW" required="required">
												</div>
											</div>

											<div class="form-group">
												<label>Status perkawinan</label>
												<select class="form-control" style="width: 100%;" id="view-StaKawin" name="StaKawin" required="required">
													<option selected="selected" disabled>Masukan status perkawinan</option>
													<option value="1">1. Belum kawin</option>
													<option value="2">2. Kawin/nikah</option>
													<option value="3">3. Cerai hidup</option>
													<option value="4">4. Cerai mati</option>
												</select>
											</div>

											<div class="form-group">
												<label>Kepemilikan akta/buku nikah atau akta cerai</label>
												<select class="form-control" style="width: 100%;" id="view-AktaNikah" name="AktaNikah" required="required">
													<option selected="selected" disabled>Masukan kepemilikan buku nikah</option>
													<option value="1">1. Tidak</option>
													<option value="2">2. Ya, dapat ditunjukkan</option>
													<option value="3">3. Ya, tidak dapat ditunjukkan</option>
												</select>
											</div>

											<div class="form-group">
												<label>Tercantum dalam Kartu Keluarga (KK) di rumah tangga ini</label>
												<select class="form-control" style="width: 100%;" id="view-AdaDiKK" name="AdaDiKK" required="required">
													<option selected="selected"></option>
													<option value="1">1. Ya</option>
													<option value="2">2. Tidak</option>
												</select>
											</div>

											<div class="form-group">
												<label>Kepemilikan kartu identitas</label>
												<select id="view-ada-kartu-identitas" class="select2" multiple="multiple" data-placeholder="Pilih kartu program" style="width: 100%;" name="KartuIdentitas[]">
													<option value="1">1. Akta kelahiran</option>
													<option value="2">2. Kartu pelajar</option>
													<option value="3">3. KTP</option>
													<option value="4">4. SIM</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-kesehatan" role="tabpanel" aria-labelledby="pills-kesehatan-tab">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Kesehatan</h3>
								</div>
								<div class="box-body">

									<div class="form-group">
										<label>Status Kehamilan</label>
										<select class="form-control" style="width: 100%;" id="view-StaHamil" name="StaHamil" required="required">
											<option selected="selected"></option>
											<option value="1">1. Ya</option>
											<option value="2">2. Tidak</option>
										</select>
									</div>

									<div class="form-group">
										<label>Jenis cacat</label>
										<select class="form-control" style="width: 100%;" id="view-JenisCacat" name="JenisCacat" required="required">
											<option selected="selected" disabled>Jenis cacat</option>
											<option value="1">1. Tidak cacat</option>
											<option value="2">2. Tuna daksa/cacat tubuh</option>
											<option value="3">3. Tuna netra/buta</option>
											<option value="4">4. Tuna rungu</option>
											<option value="5">5. Tuna wicara</option>
											<option value="6">6. Tuna rungu & wicara</option>
											<option value="7">7. Tuna netra & cacat tubuh</option>
											<option value="8">8. Tuna netra, rungu & wicara</option>
											<option value="9">9. Tuna rungu, wicara & cacat tubuh</option>
											<option value="10">10. Tuna rungu, wicara, netra & cacat tubuh</option>
											<option value="11">11. Cacat mental retardasi</option>
											<option value="12">12. Mantan penderita gangguan jiwa</option>
											<option value="13">13. Cacat fisik & mental</option>
										</select>
									</div>

									<div class="form-group">
										<label>Penyakit kronis/menahun</label>
										<select class="form-control" style="width: 100%;" id="view-PenyakitKronis" name="PenyakitKronis" required="required">
											<option selected="selected" disabled>Jenis penyakit kronis yang diderita</option>
											<option value="1">1. Tidak ada</option>
											<option value="2">2. Hipertensi/tekanan darah tinggi</option>
											<option value="3">3. Rematik</option>
											<option value="4">4. Asma</option>
											<option value="5">5. Masalah jantung</option>
											<option value="6">6. Diabetes (kencing manis)</option>
											<option value="7">7. Tubercolosis (TBC)</option>
											<option value="8">8. Stroke</option>
											<option value="9">9. Kanker atau tumor ganas</option>
											<option value="10">10. Lainnya (gagal ginjal, paru-paru flek dan sejenisnya</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-pendidikan" role="tabpanel" aria-labelledby="pills-pendidikan-tab">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Pendidikan</h3>
								</div>
								<div class="box-body">

									<div class="form-group">
										<label>Partisipasi sekolah</label>
										<select class="form-control" style="width: 100%;" id="view-PartisipasiSekolah" name="PartisipasiSekolah" required="required">
											<option selected="selected" disabled>Partisipasi sekolah</option>
											<option value="1">1. Tidak/belum pernah sekolah</option>
											<option value="2">2. Masih sekolah</option>
											<option value="3">3. Tidak bersekolah lagi</option>
										</select>
									</div>

									<div class="form-group">
										<label>Jenjang dan jenis pendidikan tertinggi yang pernah atau sedang diduduki</label>
										<select class="form-control" style="width: 100%;" id="view-PendidikanTertinggi" name="PendidikanTertinggi" required="required">
											<option selected="selected" disabled>Jenjang pendidikan tertinggi</option>
											<option value="1">1. SD/SDLB</option>
											<option value="2">2. Paket A</option>
											<option value="3">3. M. Ibtidaiyah</option>
											<option value="4">4. SMP/SMPLB</option>
											<option value="5">5. Paket B</option>
											<option value="6">6. M. Tsanawiyah</option>
											<option value="7">7. SMA/SMK/SMALB</option>
											<option value="8">8. Paket C</option>
											<option value="9">9. M. Aliyah</option>
											<option value="10">10. Perguruan tinggi</option>
										</select>
									</div>

									<div class="form-group">
										<label>Kelas tertinggi yang pernah atau sedang diduduki</label>
										<select class="form-control" style="width: 100%;" id="view-KelasTertinggi" name="KelasTertinggi" required="required">
											<option selected="selected" disabled>Kelas tertinggi</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8 (tamat)</option>
										</select>
									</div>

									<div class="form-group">
										<label>Ijazah tertinggi yang dimiliki</label>
										<select class="form-control" style="width: 100%;" id="view-IjazahTertinggi" name="IjazahTertinggi" required="required">
											<option selected="selected" disabled>IjazahTertinggi</option>
											<option value="1">1. Tidak punya ijazah</option>
											<option value="2">2. SD/Sederajat</option>
											<option value="3">3. SMP/Sederajat</option>
											<option value="4">4. SMA/Sederajat</option>
											<option value="5">5. D1/D2/D3</option>
											<option value="6">6. D4/S1</option>
											<option value="7">7. S2/S3</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-ekonomi" role="tabpanel" aria-labelledby="pills-ekonomi-tab">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Ekonomi</h3>
								</div>
								<div class="box-body">

									<div class="form-group">
										<label>Bekerja/membantu bekerja selama seminggu yang lalu</label>
										<select class="form-control" style="width: 100%;" id="view-StaBekerja" name="StaBekerja" required="required">
											<option selected="selected" disabled>Status bekerja</option>
											<option value="1">1. Ya</option>
											<option value="2">2. Tidak</option>
										</select>
									</div>

									<div class="form-group">
										<label>Lapangan usaha dari pekerjaan utama</label>
										<select class="form-control" style="width: 100%;" id="view-LapanganUsaha" name="LapanganUsaha" required="required">
											<option selected="selected" disabled>Masukan jenis lapangan pekerjaan</option>
											<option value="1">1. Pertanian tanaman padi & palawija</option>
											<option value="2">2. Hortikultura</option>
											<option value="3">3. Perkebunan</option>
											<option value="4">4. Perikanan tangkap</option>
											<option value="5">5. Perikanan budidaya</option>
											<option value="6">6. Peternakan</option>
											<option value="7">7. Kehutanan & pertanian lainnya</option>
											<option value="8">8. Pertambangan/penggalian</option>
											<option value="9">9. Industri pengolahan</option>
											<option value="10">10. Listrik dan gas</option>
											<option value="11">11. Bangunan/konstruksi</option>
											<option value="12">12. Perdagangan</option>
											<option value="13">13. Hotel & rumah makan</option>
											<option value="14">14. Transportasi & pergudangan</option>
											<option value="15">15. Informasi & komunikasi</option>
											<option value="16">16. Keuangan & asuransi</option>
											<option value="17">17. Jasa pendidikan</option>
											<option value="18">18. Jasa kesehatan</option>
											<option value="19">19. Jasa kemasyarakatan, pemerintahan & perorangan</option>
											<option value="20">20. Pemulung</option>
											<option value="21">21. Lainnya</option>
										</select>
									</div>

									<div class="form-group">
										<label>Status kedudukan dalam pekerjaan utama</label>
										<select class="form-control" style="width: 100%;" id="view-StatusPekerjaan" name="StatusPekerjaan" required="required">
											<option selected="selected" disabled>Status kedudukkan</option>
											<option value="1">1. Berusaha sendiri</option>
											<option value="2">2. Berusaha dibantu buruh tidak tetap/tidak dibayar</option>
											<option value="3">3. Berusaha dibantu buruh tetap/ dibayar</option>
											<option value="4">4. Buruh/karyawan/pegawai swasta</option>
											<option value="5">5. PNS/TNI/POLRI/BUMN/BUMD/anggota legislatif</option>
											<option value="6">6. Pekerjaan bebas pertanian</option>
											<option value="7">7. Pekerja bebas non-pertanian</option>
											<option value="8">8. Pekerja keluarga/tidak dibayar</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" class="btn btn-outline-info pull-left" id="btn-perorangan"><span class="glyphicon glyphicon-remove"></span> Simpan</button>
			</div>
		</div>
	</div>
</div>
