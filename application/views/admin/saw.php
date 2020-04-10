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

        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Simple Additive Weighting
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
                    <th>Nama KRT</th>
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

        <div class="card mb-3"> <!-- Normalisasi -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Normalisasi : Membuat matriks R</span>
            <button type="button" id="btn-minimize-NR" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-NR"></i>
            </button>
          </div>
          <div class="card-body" id="card-NR" style="display: none">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>07.84</td>
                    <td>11.61</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3"> <!-- Vector V -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Vector V</span>
            <button type="button" id="btn-minimize-V" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-V"></i>
            </button>
          </div>
          <div class="card-body" id="card-V" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>V</th>
                    <th>Indikator 1</th>
                    <th>Indikator 2</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>V1</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V3</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V4</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V5</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V6</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V7</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V8</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V9</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
                  </tr>
                  <tr>
                    <td>V10</td>
                    <td>02.00</td>
                    <td>02.00</td>
                    <td>04.00</td>
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
            <button type="button" id="btn-minimize-VI" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-VI"></i>
            </button>
          </div>
          <div class="card-body" id="card-VI" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama KRT</th>
                    <th>ID Nama</th>
                    <th>Vector V</th>
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

    let is_nr_open = true //Normalisasi Matriks R
    $('#btn-minimize-NR').click(function() {
      $('#card-NR').toggle('fast')
      if (is_nr_open) {
        $('#icon-NR').removeClass('fa fa-plus');
        $('#icon-NR').addClass('fa fa-minus');
        is_nr_open=false
      }else{
        $('#icon-NR').removeClass('fa fa-minus');
        $('#icon-NR').addClass('fa fa-plus');
        is_nr_open=true
      }
    });

    let is_v_open = true //Vector V
    $('#btn-minimize-V').click(function() {
      $('#card-V').toggle('fast')
      if (is_v_open) {
        $('#icon-V').removeClass('fa fa-plus');
        $('#icon-V').addClass('fa fa-minus');
        is_v_open=false
      }else{
        $('#icon-V').removeClass('fa fa-minus');
        $('#icon-V').addClass('fa fa-plus');
        is_v_open=true
      }
    });

    let is_vi_open = true //Perankingan Alternatif
    $('#btn-minimize-VI').click(function() {
      $('#card-VI').toggle('fast')
      if (is_vi_open) {
        $('#icon-VI').removeClass('fa fa-plus');
        $('#icon-VI').addClass('fa fa-minus');
        is_vi_open=false
      }else{
        $('#icon-VI').removeClass('fa fa-minus');
        $('#icon-VI').addClass('fa fa-plus');
        is_vi_open=true
      }
    });
  </script>
</body>

</html>