<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper" style="padding-top:0px;">

      <?php $this->load->view("admin/_partials/navbar.php") ?>

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 200px; ">

        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">PROMETHEE
          <select class="form-control col-md-2" style="margin-right:10px;">
            <option value="">Semua Jenis</option>
            <option value="">Perorangan</option>
            <option value="">Keluarga</option>
          </select>
        </h5> 
       
        <div class="card mb-3"> <!-- Data Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Data Alternatif</span>
            <button type="button" id="btn-minimize-DA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-minus" id="icon-DA"></i>
            </button>
          </div>
          <div class="card-body" id="card-DA" style="display: block">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Nama</th>
                    <th>Nama</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1</td>
                    <td>Muhammad Fajar</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A2</td>
                    <td>Adi Sutrisno</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A3</td>
                    <td>Andik Wahyudi</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A4</td>
                    <td>Yunata</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A5</td>
                    <td>Saminten</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A6</td>
                    <td>Sukiman</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A7</td>
                    <td>Moch Soleh</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A8</td>
                    <td>Sungkono</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A9</td>
                    <td>Suparto</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A10</td>
                    <td>Asnan</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3"> <!-- Konfersi Data -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Konfersi Data</span>
            <button type="button" id="btn-minimize-KD" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-KD"></i>
            </button>
          </div>
          <div class="card-body" id="card-KD" style="display: none">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Nama</th>
                    <th>Nama</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1</td>
                    <td>Muhammad Fajar</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A2</td>
                    <td>Adi Sutrisno</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A3</td>
                    <td>Andik Wahyudi</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A4</td>
                    <td>Yunata</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A5</td>
                    <td>Saminten</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A6</td>
                    <td>Sukiman</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A7</td>
                    <td>Moch Soleh</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A8</td>
                    <td>Sungkono</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A9</td>
                    <td>Suparto</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A10</td>
                    <td>Asnan</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Deviasi -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Menentukan Deviasi Berdasarkan Perbandingan Berpasangan</span>
            <button type="button" id="btn-minimize-D" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-D"></i>
            </button>
          </div>
          <div class="card-body" id="card-D" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1,A1</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A3</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A4</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A5</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A6</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A7</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A8</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A9</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A10</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Preferensi -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Penerapan Fungsi Preferensi</span>
            <button type="button" id="btn-minimize-P" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-P"></i>
            </button>
          </div>
          <div class="card-body" id="card-P" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1,A1</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A3</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A4</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A5</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A6</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A7</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A8</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A9</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>A1,A10</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Indeks Preferensi -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Perhitungan Indeks Preferensi</span>
            <button type="button" id="btn-minimize-IP" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-IP"></i>
            </button>
          </div>
          <div class="card-body" id="card-IP" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1,A1</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A3</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A4</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A5</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A6</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A7</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A8</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A9</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>A1,A10</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Partial Ranking -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Partial Ranking</span>
            <button type="button" id="btn-minimize-PR" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PR"></i>
            </button>
          </div>
          <div class="card-body" id="card-PR" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>ID Nama</th>
                    <th>Leaving Flow</th>
                    <th>Entering Flow</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A3</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A4</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A5</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A6</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A7</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A8</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A9</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A10</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Complete Ranking -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Complete Ranking</span>
            <button type="button" id="btn-minimize-CR" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-CR"></i>
            </button>
          </div>
          <div class="card-body" id="card-CR" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>ID Nama</th>
                    <th>Net Flow</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A2</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A3</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A4</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A5</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A6</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A7</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A8</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A9</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>010</td>
                    <td>A10</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Perangkingan Alternatif</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>ID Nama</th>
                    <th>Net Flow</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Adi Sutrisno</td>
                    <td>A1</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Suminten</td>
                    <td>A2</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Juari</td>
                    <td>A3</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Asroi Lailam</td>
                    <td>A4</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Budi Djaya</td>
                    <td>A5</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>Dwi Setyo</td>
                    <td>A6</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>Solichudin</td>
                    <td>A7</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>Ngari</td>
                    <td>A8</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>M Soliki</td>
                    <td>A9</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sentot Kurniadi</td>
                    <td>A10</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

      <!-- Sticky Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>
  <script>
    let is_da_open = true //Data Alternatif
    $('#btn-minimize-DA').click(function() {
      $('#card-DA').toggle('fast')
      if (is_da_open) {
        $('#icon-DA').removeClass('fa fa-minus');
        $('#icon-DA').addClass('fa fa-plus');
        is_da_open=false
      }else{
        $('#icon-DA').removeClass('fa fa-plus');
        $('#icon-DA').addClass('fa fa-minus');
        is_da_open=true
      }
    });

    let is_kd_open = true //Konversi Data
    $('#btn-minimize-KD').click(function() {
      $('#card-KD').toggle('fast')
      if (is_kd_open) {
        $('#icon-KD').removeClass('fa fa-plus');
        $('#icon-KD').addClass('fa fa-minus');
        is_kd_open=false
      }else{
        $('#icon-KD').removeClass('fa fa-minus');
        $('#icon-KD').addClass('fa fa-plus');
        is_kd_open=true
      }
    });

    let is_d_open = true //Deviasi
    $('#btn-minimize-D').click(function() {
      $('#card-D').toggle('fast')
      if (is_d_open) {
        $('#icon-D').removeClass('fa fa-plus');
        $('#icon-D').addClass('fa fa-minus');
        is_d_open=false
      }else{
        $('#icon-D').removeClass('fa fa-minus');
        $('#icon-D').addClass('fa fa-plus');
        is_d_open=true
      }
    });

    let is_p_open = true //Preferensi
    $('#btn-minimize-P').click(function() {
      $('#card-P').toggle('fast')
      if (is_p_open) {
        $('#icon-P').removeClass('fa fa-plus');
        $('#icon-P').addClass('fa fa-minus');
        is_p_open=false
      }else{
        $('#icon-P').removeClass('fa fa-minus');
        $('#icon-P').addClass('fa fa-plus');
        is_p_open=true
      }
    });

    let is_ip_open = true //Indeks Preferensi
    $('#btn-minimize-IP').click(function() {
      $('#card-IP').toggle('fast')
      if (is_ip_open) {
        $('#icon-IP').removeClass('fa fa-plus');
        $('#icon-IP').addClass('fa fa-minus');
        is_ip_open=false
      }else{
        $('#icon-IP').removeClass('fa fa-minus');
        $('#icon-IP').addClass('fa fa-plus');
        is_ip_open=true
      }
    });

    let is_pr_open = true //Partial Ranking
    $('#btn-minimize-PR').click(function() {
      $('#card-PR').toggle('fast')
      if (is_pr_open) {
        $('#icon-PR').removeClass('fa fa-plus');
        $('#icon-PR').addClass('fa fa-minus');
        is_pr_open=false
      }else{
        $('#icon-PR').removeClass('fa fa-minus');
        $('#icon-PR').addClass('fa fa-plus');
        is_pr_open=true
      }
    });

    let is_cr_open = true //Complete Ranking
    $('#btn-minimize-CR').click(function() {
      $('#card-CR').toggle('fast')
      if (is_cr_open) {
        $('#icon-CR').removeClass('fa fa-plus');
        $('#icon-CR').addClass('fa fa-minus');
        is_cr_open=false
      }else{
        $('#icon-CR').removeClass('fa fa-minus');
        $('#icon-CR').addClass('fa fa-plus');
        is_cr_open=true
      }
    });

    let is_pa_open = true //Perankingan Alternatif
    $('#btn-minimize-PA').click(function() {
      $('#card-PA').toggle('fast')
      if (is_pa_open) {
        $('#icon-PA').removeClass('fa fa-plus');
        $('#icon-PA').addClass('fa fa-minus');
        is_pa_open=false
      }else{
        $('#icon-PA').removeClass('fa fa-minus');
        $('#icon-PA').addClass('fa fa-plus');
        is_pa_open=true
      }
    });
  </script>
</body>

</html>