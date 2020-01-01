<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style>
    td a i {
      color: #555555;
      margin: 0px 5px;
    }
  </style>
</head>

<body id="page-top">

  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper" style="padding-top:0px;">

    <?php $this->load->view("admin/_partials/navbar.php") ?>

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 20px;" >

        <h5 style="margin-bottom : 3px;" >Data Alternatif Kemiskinan <small> Dinas Sosial Kota Malang </small> </h5>

        <div class="form-inline" style="margin-bottom:20px; margin-top:20px;" >
                <div class="col-md-6" style="padding: 0px; color: #555555! important;">
                  <a href="<?php echo site_url('admin/form') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Tambah Data</button></a>
                </div>
                <select class="form-control col-md-2" style="margin-right:10px;">
                      <option value="">Semua Jenis</option>
                      <option value="">Perorangan</option>
                      <option value="">Keluarga</option>
                </select>
                <input type="text" id="input-search" name="search" placeholder="Search" class="form-control col-md-3">
              </div>

        <!-- DataTables -->
        <div class="card mb-3">
         <div class="card-header" style="padding : 0rem !important;"></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Jenis</th>
                    <th>Nama Penerima</th>
                    <th>Alamat</th>
                    <th>Tanggal Survey</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="color:red;" ><span class="glyphicon glyphicon-lock"></span> <span id="title-modal-penerima"> Detail Data Penerima - Perorangan</span></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form role="form">
                <div id="form-perorangan">
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Identitas Perorangan</h3>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <label>Nama</label><br>
                          <input type="text" class="form-control" id="input-nama" name="Nama" placeholder="Masukan nama anggota rumah tangga" required="required">
                        </div>

                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" class="form-control" id="input-nik" name="NIK" placeholder="Masukan NIK anggota rumah tangga" required="required">
                        </div>

                        <div class="form-group">
                          <label>Hubungan dengan kepala rumah tangga</label>
                          <select class="form-control" style="width: 100%;" id="input-hubungan-krt" name="HubKRT" required="required">
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
                          <input type="text" class="form-control" id="input-no-keluarga" name="NoKeluarga" placeholder="Masukan nomor urut keluarga" required="required">
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-8">
                            <label for="inputCity">Alamat</label>
                            <input type="text" class="form-control" id="input-alamat1" name="Alamat1" required="required">
                          </div>

                          <div class="form-group col-md-2">
                            <label for="inputZip">RT</label>
                            <input type="text" class="form-control" id="input-rt1" name="RT1" required="required">
                          </div>

                          <div class="form-group col-md-2">
                            <label for="inputZip">RW</label>
                            <input type="text" class="form-control" id="input-rw1" name="RW1" required="required">
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Jenis kelamin</label>
                          <select class="form-control" style="width: 100%;" id="input-jenis-kelamin" name="JenisKlamin" required="required">
                            <option selected="selected" disabled=> Masukkan jenis kelamin</option>
                            <option value="1">1. Laki-Laki</option>
                            <option value="2">2. Perempuan</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Umur</label>
                          <input type="text" class="form-control" id="input-umur" name="Umur" placeholder="Masukan umur anda" required="required">
                        </div>

                        <div class="form-group">
                          <label>Status perkawinan</label>
                          <select class="form-control" style="width: 100%;" id="input-status-perkawinan" name="StatusPerkawinan" required="required">
                            <option selected="selected" disabled>Masukan status perkawinan</option>
                            <option value="1">1. Belum kawin</option>
                            <option value="2">2. Kawin/nikah</option>
                            <option value="3">3. Cerai hidup</option>
                            <option value="4">4. Cerai mati</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Kepemilikan akta/buku nikah atau akta cerai</label>
                          <select class="form-control" style="width: 100%;" id="input-buku-nikah" name="KepemilikanBukuNikah" required="required">
                            <option selected="selected" disabled>Masukan kepemilikan buku nikah</option>
                            <option value="1">1. Tidak</option>
                            <option value="2">2. Ya, dapat ditunjukkan</option>
                            <option value="3">3. Ya, tidak dapat ditunjukkan</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Tercantum dalam Kartu Keluarga (KK) di rumah tangga ini</label>
                          <select class="form-control" style="width: 100%;" id="input-ada-kk" name="TercantumDalamKertuKeluarga" required="required">
                            <option selected="selected"></option>
                            <option value="1">1. Ya</option>
                            <option value="2">2. Tidak</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Kepemilikan kartu identitas</label>
                          <select id="input-ada-kartu-identitas" class="select2" multiple="multiple" data-placeholder="Pilih kartu program" style="width: 100%;" name="KartuIdentitas[]">
                            <option value="1">1. Akta kelahiran</option>
                            <option value="2">2. Kartu pelajar</option>
                            <option value="3">3. KTP</option>
                            <option value="4">4. SIM</option>
                          </select>
                        </div>
                      </div>
                    </div>

                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Kesehatan</h3>
                        </div>
                        <div class="box-body">

                        <div class="form-group">
                          <label>Status Kehamilan</label>
                          <select class="form-control" style="width: 100%;" id="input-kehamilan" name="StaHamil" required="required">
                            <option selected="selected"></option>
                            <option value="1">1. Ya</option>
                            <option value="2">2. Tidak</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Jenis cacat</label>
                          <select class="form-control" style="width: 100%;" id="input-jenis-cacat" name="JenisCacat" required="required">
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
                          <select class="form-control" style="width: 100%;" id="input-penyakit-kronis" name="PenyakitKronis" required="required">
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

                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Pendidikan</h3>
                        </div>
                        <div class="box-body">

                        <div class="form-group">
                          <label>Partisipasi sekolah</label>
                          <select class="form-control" style="width: 100%;" id="input-partisipasi-sekolah" name="PartisipasiSekolah" required="required">
                            <option selected="selected" disabled>Partisipasi sekolah</option>
                            <option value="1">1. Tidak/belum pernah sekolah</option>
                            <option value="2">2. Masih sekolah</option>
                            <option value="3">3. Tidak bersekolah lagi</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Jenjang dan jenis pendidikan tertinggi yang pernah atau sedang diduduki</label>
                          <select class="form-control" style="width: 100%;" id="input-jenjang-pendidikan" name="JenjangPendidikanTertinggi" required="required">
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
                          <select class="form-control" style="width: 100%;" id="input-kelas-tertinggi" name="KelasTertinggi" required="required">
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
                          <select class="form-control" style="width: 100%;" id="input-ijazah-tertinggi" name="IjazahTertinggi" required="required">
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

                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Ekonomi</h3>
                        </div>
                        <div class="box-body">

                        <div class="form-group">
                          <label>Bekerja/membantu bekerja selama seminggu yang lalu</label>
                          <select class="form-control" style="width: 100%;" id="input-status-bekerja" name="StatusBekerja" required="required">
                            <option selected="selected" disabled>Status bekerja</option>
                            <option value="1">1. Ya</option>
                            <option value="2">2. Tidak</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Lapangan usaha dari pekerjaan utama</label>
                          <select class="form-control" style="width: 100%;" id="input-lapangan-pekerjaan" name="LapanganPekerjaan" required="required">
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
                          <select class="form-control" style="width: 100%;" id="input-kedudukan-pekerjaan" name="StatusKedudukanPekerjaan" required="required">
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




                <div id="form-keluarga">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Pengenalan Tempat</h3>
                    </div>

                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama</label><br>
                        <input type="text" class="form-control" id="input-nama1" name="Nama1" placeholder="Masukan nama kepala rumah tangga" required="required">
                      </div>
                      
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control select2" style="width: 100%;" id="input-nama-kecamatan" name="Kecamatan" required="required">
                          <option selected="selected" disabled> Masukan kecamatan</option>
                          <option value="1">Kedungkandang</option>
                          <option value="2">Klojen</option>
                          <option value="3">Lowokwaru</option>
                          <option value="4">Sukun</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Kelurahan</label>
                        <select class="form-control select2" style="width: 100%;" id="input-nama-kelurahan" name="Kelurahan" required="required">
                          <option selected="selected" disabled>Masukan Kelurahan</option>
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
                          <input type="text" class="form-control" id="input-alamat" name="Alamat" required="required">
                        </div>

                        <div class="form-group col-md-2">
                          <label for="inputZip">RT</label>
                          <input type="text" class="form-control" id="input-rt" name="RT" required="required">
                        </div>

                        <div class="form-group col-md-2">
                          <label for="inputZip">RW</label>
                          <input type="text" class="form-control" id="input-rw" name="RW" required="required">
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
                          <select class="form-control select2" style="width: 100%;" id="input-penguasaan-bangunan" name="Bangunan" required="required">
                            <option selected="selected" disabled> Pilih status</option>
                            <option value="1">1. Milik sendiri</option>
                            <option value="2">2. Kontrak/sewa</option>
                            <option value="3">3. Bebas sewa</option>
                            <option value="4">4. Dinas</option>
                            <option value="5">5. Lainnya</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Status lahan tempat tinggal yang ditempati</label>
                          <select class="form-control select2" style="width: 100%;" id="input-status-lahan" name="Lahan" required="required">
                            <option selected="selected" disabled> Pilih status</option>
                            <option value="1">1. Milik sendiri</option>
                            <option value="2">2. Milik orang lain</option>
                            <option value="3">3. Tanah negara</option>
                            <option value="4">4. Lainnya</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Luas lantai</label>
                          <input type="number" class="form-control" id="input-luas-lantai" name="LuasLantai" placeholder="Masukkan luas lantai" required="required">
                        </div>

                        <div class="form-group">
                          <label>Jenis lantai terluas</label>
                          <select class="form-control" style="width: 100%;" id="input-jenis-lantai" name="JenisLantai" required="required">
                            <option selected="selected" disabled>Jenis lantai</option>
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
                          <select class="form-control" style="width: 100%;" id="input-jenis-dinding" name="JenisDinding" required="required">
                            <option selected="selected" disabled>Jenis dinding</option>
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
                          <select class="form-control" style="width: 100%;" id="input-kondisi-dinding" name="KondisiDinding" required="required">
                            <option selected="selected" disabled>Kondisi dinding</option>
                            <option value="1">1. Bagus/kualitas tinggi</option>
                            <option value="2">2. Jelek/kualitas rendah</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Jenis atap terluas</label>
                          <select class="form-control" style="width: 100%;" id="input-jenis-atap" name="JenisAtap" required="required">
                            <option selected="selected" disabled>Jenis atap</option>
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
                          <select class="form-control" style="width: 100%;" id="input-kondisi-atap" name="KondisiAtap" required="required">
                            <option selected="selected" disabled>Kondisi atap</option>
                            <option value="1">1. Bagus/kualitas tinggi</option>
                            <option value="2">2. Jelek/kualitas redah</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Jumlah kamar tidur</label>
                          <input type="number" class="form-control" id="input-kamar-tidur" name="JmlKamarTidur" placeholder="Masukkan jumlah kamar tidur" required="required">
                        </div>

                        <div class="form-group">
                          <label>Sumber air minum</label>
                          <select class="form-control" style="width: 100%;" id="input-sumber-air" name="SumberAirMinum" required="required">
                            <option selected="selected" disabled>Sumber air minum</option>
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
                          <select class="form-control" style="width: 100%;" id="input-memperoleh-air" name="MemperolehAirMinum" required="required">
                            <option selected="selected" disabled>Cara memperoleh</option>
                            <option value="1">1. Membeli eceran</option>
                            <option value="2">2. Langganan</option>
                            <option value="3">3. Tidak berlangganan</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Sumber penerangan utama</label>
                          <select class="form-control" style="width: 100%;" id="input-penerangan" name="PeneranganUtama" required="required">
                            <option selected="selected" disabled>Sumber penerangan</option>
                            <option value="1">1. Listrik PLN</option>
                            <option value="2">2. Listrik non PLN</option>
                            <option value="3">3. Bukan listrik</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Daya penerangan</label>
                          <select class="form-control" style="width: 100%;" id="input-daya-penerangan" name="DayaPenerangan" required="required">
                            <option selected="selected" disabled>Daya</option>
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
                          <select class="form-control" style="width: 100%;" id="input-bahan-bakar" name="BahanBakarMasak" required="required">
                            <option selected="selected" disabled>Bahan bakar</option>
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
                          <select class="form-control" style="width: 100%;" id="input-fasilitas-bab" name="FasilitasBAB" required="required">
                            <option selected="selected" disabled>Fasilitas BAB</option>
                            <option value="1">1. Sendiri</option>
                            <option value="2">2. Bersama</option>
                            <option value="3">3. Umum</option>
                            <option value="4">4. Tidak ada</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Jenis kloset</label>
                          <select class="form-control" style="width: 100%;" id="input-jenis-kloset" name="JenisKloset" required="required">
                            <option selected="selected" disabled>Jenis kloset</option>
                            <option value="1">1. Leher angsa</option>
                            <option value="2">2. Plengsengan</option>
                            <option value="3">3. Cemplung/cubluk</option>
                            <option value="4">4. Tidak pakai</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Tempat pembuangan akhir tinja</label>
                          <select class="form-control" style="width: 100%;" id="input-pembuangan-tinja" name="TempatPembuanganTinja" required="required">
                            <option selected="selected" disabled>Tempat pembuangan akhir</option>
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
                          <select id="input-ada-asset" class="select2" multiple="multiple" data-placeholder="Pilih asset yang dimiliki" style="width: 100%;" name="AssetBergerak[]" required="required">
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
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-lahan" name="Lahan" placeholder="Masukkan luas lahan yang dimiliki (Ha)" required="required">
                          </div>
                          <label>rumah</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-rumah" name="Rumah" placeholder="Masukkan jumlah rumah yang dimiliki (unit)" required="required">
                          </div>
                        </div>

                        <div class="form-group">
                          <h6 class="box-title">Jumlah ternak yang dimiliki</h6>
                          <label>Sapi</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-sapi" name="JumlahSapi" placeholder="Masukan jumlah sapi yang dimiliki (ekor)" required="required">
                          </div>
                          <label>Kerbau</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-kerbau" name="JumlahKerbau" placeholder="Masukkan jumlah kerbau yang dimiliki (ekor)" required="required">
                          </div><label>Kuda</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-kuda" name="JumlahKuda" placeholder="Masukkan jumlah kuda yang dimiliki (ekor)" required="required">
                          </div><label>Babi</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-babi" name="JumlahBabi" placeholder="Masukkan jumlah babi yang dimiliki (ekor)" required="required">
                          </div>
                          <label>Kambing/Domba</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <input type="checkbox">
                              </span>
                            </div>
                            <input type="text" class="form-control" id="input-kambing" name="JumlahKambing" placeholder="Masukkan jumlah kambing/domba yang dimiliki (ekor)" required="required">
                          </div>
                        </div>

                        <div class="form-group">
                          <label>Memiliki/terdaftar dalam kartu pemerintah</label>
                          <select id="input-kartu-pemerintah" class="select2" multiple="multiple" data-placeholder="Pilih kartu program" style="width: 100%;" name="KartuPemerintah[]" required="required">
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
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div>


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->



  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>

  
</body>

</html>