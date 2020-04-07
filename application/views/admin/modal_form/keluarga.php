<div id="view1-keluarga" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> <span id="title-modal-penerima"> Detail Data Penerima - Keluarga</span></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id="form-keluarga">
					<input type="number" id="view1-id_Survey" name="id_Survey" readonly hidden>
					<input type="number" id="view1-IdJenisPenerima" name="IdJenisPenerima" readonly hidden>
					<input type="number" id="view1-IdPengenalanTempat" name="IdPengenalanTempat" readonly hidden>
					<input type="number" id="view1-IdPerumahan" name="IdPerumahan" readonly hidden>
					<input type="number" id="view1-IdAsetTidakBergerak" name="IdAsetTidakBergerak" readonly hidden>
					<input type="number" id="view1-IdProgram" name="IdProgram" readonly hidden>
					<input type="number" id="view1-IdAsetBergerak" name="IdAsetBergerak" readonly hidden>
					<input type="number" id="view1-IdTernak" name="IdTernak" readonly hidden>
					<div id="form-keluarga">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Pengenalan Tempat</h3>
							</div>

							<div class="box-body">
								<div class="form-group">
									<label>Nama</label><br>
									<input type="text" class="form-control" id="view1-NamaKRT" name="Nama1" placeholder="Masukan nama kepala rumah tangga" required="required">
								</div>

								<div class="form-group">
									<label>Kecamatan</label>
									<select class="form-control select2" style="width: 100%;" id="view1-IdKecamatan" name="Kecamatan" required="required">
										<!-- <option selected="selected" disabled> Masukan kecamatan</option> -->
										<option value="1">Kedungkandang</option>
										<option value="2">Klojen</option>
										<option value="3">Lowokwaru</option>
										<option value="4">Sukun</option>
									</select>
								</div>

								<div class="form-group">
									<label>Kelurahan</label>
									<select class="form-control select2" style="width: 100%;" id="view1-IdKelurahan" name="Kelurahan" required="required">
										<!-- <option selected="selected" disabled>Masukan Kelurahan</option> -->
										<option value="1">Arjosari</option>
										<option value="2">Arjowinangun</option>
										<option value="3">Bakalankrajan</option>
										<option value="4">Balearjosari</option>
										<option value="5">Bandulan</option>
										<option value="6">Bandungrejosari</option>
										<option value="7">Bareng</option>
										<option value="8">Blimbing</option>
										<option value="9">Bumiayu</option>
										<option value="10">Bunulrejo</option>
										<option value="11">Buring</option>
										<option value="12">Cemorokandang</option>
										<option value="13">Ciptomulyo</option>
										<option value="14">Dinoyo</option>
										<option value="15">Gadang</option>
										<option value="16">Gadingasri</option>
										<option value="17">Jatimulyo</option>
										<option value="18">Jodipan</option>
										<option value="19">Karangbesuki</option>
										<option value="20">Kasin</option>
										<option value="21">Kauman</option>
										<option value="22">Kebonsari</option>
										<option value="23">Kedungkandang</option>
										<option value="24">Kesatrian</option>
										<option value="25">Ketawanggede</option>
										<option value="26">Kiduldalem</option>
										<option value="27">Klojen</option>
										<option value="28">Kotalama</option>
										<option value="29">Lesanpuro</option>
										<option value="30">Lowokwaru</option>
										<option value="31">Madyopuro</option>
										<option value="32">Mergosono</option>
										<option value="33">Merjosari</option>
										<option value="34">Mojolangu</option>
										<option value="35">Mulyorejo</option>
										<option value="36">Oro-Oro Dowo</option>
										<option value="37">Pandanwangi</option>
										<option value="38">Penanggungan</option>
										<option value="39">Pisangcandi</option>
										<option value="40">Polehan</option>
										<option value="41">Polowijen</option>
										<option value="42">Purwantoro</option>
										<option value="43">Purwodadi</option>
										<option value="44">Rampal Celaket</option>
										<option value="45">Samaan</option>
										<option value="46">Sawojajar</option>
										<option value="47">Sukoharjo</option>
										<option value="48">Sukun</option>
										<option value="49">Sumbersari</option>
										<option value="50">Tanjungrejo</option>
										<option value="51">Tasikmadu</option>
										<option value="52">Tlogomas</option>
										<option value="53">Tlogowaru</option>
										<option value="54">Tulusrejo</option>
										<option value="55">Tunggulwulung</option>
										<option value="56">Tunjungsekar</option>
										<option value="57">Wonokoyo</option>
									</select>
								</div>

								<div class="form-row">
									<div class="form-group col-md-8">
										<label for="inputCity">Alamat</label>
										<input type="text" class="form-control" id="view1-Alamat" name="Alamat" required="required">
									</div>

									<div class="form-group col-md-2">
										<label for="inputZip">RT</label>
										<input type="number" class="form-control" id="view1-RT" name="RT" required="required">
									</div>

									<div class="form-group col-md-2">
										<label for="inputZip">RW</label>
										<input type="number" class="form-control" id="view1-RW" name="RW" required="required">
									</div>


								</div>
							</div>
						</div>



						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Keterangan Perumahan</h3>
							</div>

							<div class="box-body">
								<div class="form-group">
									<label>Status penguasaan bangunan</label>
									<select class="form-control select2" style="width: 100%;" id="view1-StaBangunan" name="Bangunan" required="required">
										<!-- <option selected="selected" disabled> Pilih status</option> -->
										<option value="1">1. Milik sendiri</option>
										<option value="2">2. Kontrak/sewa</option>
										<option value="3">3. Bebas sewa</option>
										<option value="4">4. Dinas</option>
										<option value="5">5. Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Status lahan tempat tinggal yang ditempati</label>
									<select class="form-control select2" style="width: 100%;" id="view1-StaLahan" name="Lahan" required="required">
										<!-- <option selected="selected" disabled> Pilih status</option> -->
										<option value="1">1. Milik sendiri</option>
										<option value="2">2. Milik orang lain</option>
										<option value="3">3. Tanah negara</option>
										<option value="4">4. Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Luas lantai</label>
									<input type="number" class="form-control" id="view1-LuasLantai" name="LuasLantai" placeholder="Masukkan luas lantai" required="required">
								</div>

								<div class="form-group">
									<label>Jenis lantai terluas</label>
									<select class="form-control" style="width: 100%;" id="view1-Lantai" name="JenisLantai" required="required">
										<!-- <option selected="selected" disabled>Jenis lantai</option> -->
										<option value="1">1. Marmer/granit</option>
										<option value="2">2. Keramik</option>
										<option value="3">3. Paret/vinil/permadani</option>
										<option value="4">4. Ubin/tegel/teraso</option>
										<option value="5">5. Kayu/papan kualitas tinggi</option>
										<option value="6">6. Semen/bata merah</option>
										<option value="7">7. Bambu</option>
										<option value="8">8. Kayu/papan kualitas rendah</option>
										<option value="9">9. Tanah</option>
										<option value="10">10.Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Jenis dinding terluas</label>
									<select class="form-control" style="width: 100%;" id="view1-Dinding" name="JenisDinding" required="required">
										<!-- <option selected="selected" disabled>Jenis dinding</option> -->
										<option value="1">1. Tembok</option>
										<option value="2">2. Plesteran anyaman bambu/kawat</option>
										<option value="3">3. Kayu</option>
										<option value="4">4. Anyaman Bambu</option>
										<option value="5">5. Batang kayu</option>
										<option value="6">6. Bambu</option>
										<option value="7">7. Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Kondisi dinding</label>
									<select class="form-control" style="width: 100%;" id="view1-KondisiDinding" name="KondisiDinding" required="required">
										<!-- <option selected="selected" disabled>Kondisi dinding</option> -->
										<option value="1">1. Bagus/kualitas tinggi</option>
										<option value="2">2. Jelek/kualitas rendah</option>
									</select>
								</div>

								<div class="form-group">
									<label>Jenis atap terluas</label>
									<select class="form-control" style="width: 100%;" id="view1-Atap" name="JenisAtap" required="required">
										<!-- <option selected="selected" disabled>Jenis atap</option> -->
										<option value="1">1. Beton/geteng beton</option>
										<option value="2">2. Genteng keramik</option>
										<option value="3">3. Genteng metal</option>
										<option value="4">4. Genteng tanah liat</option>
										<option value="5">5. Asbes</option>
										<option value="6">6. Seng</option>
										<option value="7">7. Sirap</option>
										<option value="8">8. Bambu</option>
										<option value="9">9. Jerami/ijuk/daun daunan/rambia</option>
										<option value="10">10.Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Kondisi atap</label>
									<select class="form-control" style="width: 100%;" id="view1-KondisiAtap" name="KondisiAtap" required="required">
										<!-- <option selected="selected" disabled>Kondisi atap</option> -->
										<option value="1">1. Bagus/kualitas tinggi</option>
										<option value="2">2. Jelek/kualitas redah</option>
									</select>
								</div>

								<div class="form-group">
									<label>Jumlah kamar tidur</label>
									<input type="number" class="form-control" id="view1-JumlahKamar" name="JmlKamarTidur" placeholder="Masukkan jumlah kamar tidur" required="required">
								</div>

								<div class="form-group">
									<label>Sumber air minum</label>
									<select class="form-control" style="width: 100%;" id="view1-SumberAirminum" name="SumberAirMinum" required="required">
										<!-- <option selected="selected" disabled>Sumber air minum</option> -->
										<option value="1">1. Air kemasan bermerk</option>
										<option value="2">2. Air isi ulang</option>
										<option value="3">3. Leding meteran</option>
										<option value="4">4. Leding eceran</option>
										<option value="5">5. Sumur bor/pompa</option>
										<option value="6">6. Sumur terlindungi</option>
										<option value="7">7. Sumur tak terlingdungi</option>
										<option value="8">8. Mata air terlidungi</option>
										<option value="9">9. Mata air tak terlindungi</option>
										<option value="10">10.Air sungai/danau/waduk</option>
										<option value="11">11.Air hujan</option>
										<option value="12">12.Lainnya</option>
									</select>
								</div>

								<div class="form-group">
									<label>Cara memperoleh air minum</label>
									<select class="form-control" style="width: 100%;" id="view1-MemperolehAirminum" name="MemperolehAirminum" required="required">
										<!-- <option selected="selected" disabled>Cara memperoleh</option> -->
										<option value="1">1. Membeli eceran</option>
										<option value="2">2. Langganan</option>
										<option value="3">3. Tidak berlangganan</option>
									</select>
								</div>

								<div class="form-group">
									<label>Sumber penerangan utama</label>
									<select class="form-control" style="width: 100%;" id="view1-SumberPenerangan" name="PeneranganUtama" required="required">
										<!-- <option selected="selected" disabled>Sumber penerangan</option> -->
										<option value="1">1. Listrik PLN</option>
										<option value="2">2. Listrik non PLN</option>
										<option value="3">3. Bukan listrik</option>
									</select>
								</div>

								<div class="form-group">
									<label>Daya penerangan</label>
									<select class="form-control" style="width: 100%;" id="view1-Daya" name="DayaPenerangan" required="required">
										<!-- <option selected="selected" disabled>Daya</option> -->
										<option value="1">1. 450 watt</option>
										<option value="2">2. 900 watt</option>
										<option value="3">3. 1.300 watt</option>
										<option value="4">4. 2.200 watt</option>
										<option value="5">5. > 2.200 watt</option>
										<option value="6">6. Tanpa meteran</option>
									</select>
								</div>

								<div class="form-group">
									<label>Bahan bakar/energi utama untuk memasak</label>
									<select class="form-control" style="width: 100%;" id="view1-BahanMasak" name="BahanBakarMasak" required="required">
										<!-- <option selected="selected" disabled>Bahan bakar</option> -->
										<option value="1">1. Listrik</option>
										<option value="2">2. Gas > 3 kg</option>
										<option value="3">3. Gas 3 kg</option>
										<option value="4">4. Gas kota/biogas</option>
										<option value="5">5. Minyak tanah</option>
										<option value="6">6. Briket</option>
										<option value="7">7. Arang</option>
										<option value="8">8. Kayu bakar</option>
										<option value="9">9. Tidak memasak di rumah</option>
									</select>
								</div>

								<div class="form-group">
									<label>Penggunaan fasilitas tempat buang air besar</label>
									<select class="form-control" style="width: 100%;" id="view1-FasilitasBAB" name="FasilitasBAB" required="required">
										<!-- <option selected="selected" disabled>Fasilitas BAB</option> -->
										<option value="1">1. Sendiri</option>
										<option value="2">2. Bersama</option>
										<option value="3">3. Umum</option>
										<option value="4">4. Tidak ada</option>
									</select>
								</div>

								<div class="form-group">
									<label>Jenis kloset</label>
									<select class="form-control" style="width: 100%;" id="view1-Kloset" name="JenisKloset" required="required">
										<!-- <option selected="selected" disabled>Jenis kloset</option> -->
										<option value="1">1. Leher angsa</option>
										<option value="2">2. Plengsengan</option>
										<option value="3">3. Cemplung/cubluk</option>
										<option value="4">4. Tidak pakai</option>
									</select>
								</div>

								<div class="form-group">
									<label>Tempat pembuangan akhir tinja</label>
									<select class="form-control" style="width: 100%;" id="view1-BuangTinja" name="TempatPembuanganTinja" required="required">
										<!-- <option selected="selected" disabled>Tempat pembuangan akhir</option> -->
										<option value="1">1. Tangki</option>
										<option value="2">2. SPAL</option>
										<option value="3">3. Lubang tanah</option>
										<option value="4">4. Kolam/sawah/sungai/danau/laut</option>
										<option value="5">5. Pantai/tanah lapang/kebun</option>
										<option value="6">6. Lainnya</option>
									</select>
								</div>

							</div>
						</div>


						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Kepemilikan Aset & Keikutsertaan Program</h3>
							</div>

							<div class="box-body">
								<div class="form-group">
									<label>Memiliki sendiri asset bergerak</label>
									<select id="view1-ada-asset" class="select2" multiple="multiple" data-placeholder="Pilih asset yang dimiliki" style="width: 100%;" name="AssetBergerak[]" required="required">
										<option value="1">Tabung Gas 5.5 Kg/lebih</option>
										<option value="2">Kulkas</option>
										<option value="3">AC</option>
										<option value="4">Pemanas Air</option>
										<option value="5">Telepon Rumah</option>
										<option value="6">Televisi</option>
										<option value="7">Emas/perhiasan</option>
										<option value="8">Komputer/laptop</option>
										<option value="9">Sepeda</option>
										<option value="10">Sepeda Motor</option>
										<option value="11">Mobil</option>
										<option value="12">Perahu</option>
										<option value="13">Motor tempel</option>
										<option value="14">Perahu motor</option>
										<option value="15">Kapal</option>
									</select>
								</div>

								<div class="form-group">
									<h6 class="box-title">Asset tidak bergerak</h6>
									<label>lahan</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-LuasAtb" name="Lahan" placeholder="Masukkan luas lahan yang dimiliki (Ha)" required="required">
									</div>
									<label>rumah</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-RumahLain" name="Rumah" placeholder="Masukkan jumlah rumah yang dimiliki (unit)" required="required">
									</div>
								</div>

								<div class="form-group">
									<h6 class="box-title">Jumlah ternak yang dimiliki</h6>
									<label>Sapi</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-JumlahSapi" name="JumlahSapi" placeholder="Masukan jumlah sapi yang dimiliki (ekor)" required="required">
									</div>
									<label>Kerbau</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-JumlahKerbau" name="JumlahKerbau" placeholder="Masukkan jumlah kerbau yang dimiliki (ekor)" required="required">
									</div><label>Kuda</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-JumlahKuda" name="JumlahKuda" placeholder="Masukkan jumlah kuda yang dimiliki (ekor)" required="required">
									</div><label>Babi</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-JumlahBabi" name="JumlahBabi" placeholder="Masukkan jumlah babi yang dimiliki (ekor)" required="required">
									</div>
									<label>Kambing/Domba</label>
									<div class="view1-group">
										<div class="view1-group-prepend">
											<span class="view1-group-text">
												<input type="checkbox">
											</span>
										</div>
										<input type="number" class="form-control" id="view1-JumlahKambing" name="JumlahKambing" placeholder="Masukkan jumlah kambing/domba yang dimiliki (ekor)" required="required">
									</div>
								</div>

								<div class="form-group">
									<label>Memiliki/terdaftar dalam kartu pemerintah</label>
									<select id="view1-program" class="select2" multiple="multiple" data-placeholder="Pilih kartu program" style="width: 100%;" name="KartuPemerintah[]" required="required">
										<option value="1">Kartu Keluarga Sejahtera (KKS)/Kartu Perlindungan Sejahtera(KPS)</option>
										<option value="2">Kartu Indonesia Pintar (KIP)/Bantuan Siswa Miskin (BSM)</option>
										<option value="3">Kartu Indonesia Sehat (KIS)/BPJS Kesehatan/JAMKESMAS</option>
										<option value="4">BPJS Kesehatan Peserta Mandiri </option>
										<option value="5">JAMSOSTEK/BPJS Ketenagakerjaan</option>
										<option value="6">Asuransi kesehatan lainnya</option>
										<option value="7">Program Keluarha Harapan (PKH)</option>
										<option value="8">Beras untuk orang miskin (RASKIN)</option>
										<option value="9">Kredit Usaha Rakyat (KUR)</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" class="btn btn-outline-info pull-left" id="btn-keluarga"><span class="glyphicon glyphicon-remove"></span> Simpan</button>
			</div>
		</div>
	</div>
</div>
