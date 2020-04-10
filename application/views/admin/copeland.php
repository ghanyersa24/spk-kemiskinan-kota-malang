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

        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Copeland Score
          <select class="form-control col-md-2" style="margin-right:10px;">
            <option value="">Semua Jenis</option>
            <option value="">Perorangan</option>
            <option value="">Rumah Tangga</option>
          </select>
        </h5>

        <div class="card mb-3">
          <!-- Hasil Sementara -->
          <div class="card-header d-flex justify-content-between">
            <span>
              <i class="fa fa-calculator" aria-hidden="true"></i>
              Hasil Perhitungan Sementara
            </span>

            <div class="row" style="width: 205px">
              <select class="form-control col-9">
                <option value="">PROMETHEE</option>
                <option value="">Weighted Product</option>
                <option value="">Simple Additive Weighting</option>
              </select>
              <button type="button" id="btn-minimize-DA" class="btn btn-tool d-inline col-3" data-card-widget="collapse">
                <i class="fa fa-minus" id="icon-DA"></i>
              </button>
            </div>
          </div>

          <div class="card-body" id="card-DA" style="display: block">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Nama</th>
                    <th>Nama KRT</th>
                    <th>Net Flow</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1</td>
                    <td>Muhammad Fajar</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A2</td>
                    <td>Adi Sutrisno</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A3</td>
                    <td>Andik Wahyudi</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A4</td>
                    <td>Yunata</td>
                    <td>11.61</td>
                  </tr>
                  <tr>
                    <td>A5</td>
                    <td>Saminten</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A6</td>
                    <td>Sukiman</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A7</td>
                    <td>Moch Soleh</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A8</td>
                    <td>Sungkono</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A9</td>
                    <td>Suparto</td>
                    <td>07.84</td>
                  </tr>
                  <tr>
                    <td>A10</td>
                    <td>Asnan</td>
                    <td>11.61</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3">
          <!-- Pairwase Contest -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Pairwase Contest
            </span>
            <div class="row" style="width: 205px">
              <select class="form-control col-9">
                <option value="">PROMETHEE</option>
                <option value="">Weighted Product</option>
                <option value="">Simple Additive Weighting</option>
              </select>
              <button type="button" id="btn-minimize-PC" class="btn btn-tool d-inline col-3" data-card-widget="collapse">
                <i class="fa fa-plus" id="icon-PC"></i>
              </button>
            </div>
          </div>
          <div class="card-body" id="card-PC" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>PROMETHEE</th>
                    <th>Posisi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1</td>
                    <td>01</td>
                  </tr>
                  <tr>
                    <td>A2</td>
                    <td>02</td>
                  </tr>
                  <tr>
                    <td>A3</td>
                    <td>03</td>
                  </tr>
                  <tr>
                    <td>A4</td>
                    <td>04</td>
                  </tr>
                  <tr>
                    <td>A5</td>
                    <td>05</td>
                  </tr>
                  <tr>
                    <td>A6</td>
                    <td>06</td>
                  </tr>
                  <tr>
                    <td>A7</td>
                    <td>07</td>
                  </tr>
                  <tr>
                    <td>A8</td>
                    <td>08</td>
                  </tr>
                  <tr>
                    <td>A9</td>
                    <td>09</td>
                  </tr>
                  <tr>
                    <td>A10</td>
                    <td>10</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <!-- Hasil Copelans -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Hasil Copeland Score</span>
            <button type="button" id="btn-minimize-HCS" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-HCS"></i>
            </button>
          </div>
          <div class="card-body" id="card-HCS" style="display: none">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Alternatif</th>
                    <th>Menang</th>
                    <th>Seri</th>
                    <th>Kalah</th>
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A1</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A2</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A3</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A4</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A5</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A6</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A7</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A8</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A9</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>A10</td>
                    <td>35</td>
                    <td>0</td>
                    <td>-51</td>
                    <td>13</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <!-- Perankingan Alternatif -->
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
                    <th>Ranking</th>
                    <th>Nama Alternatif</th>
                    <th>Menang</th>
                    <th>Seri</th>
                    <th>Kalah</th>
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Yasin</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Adi Sutrisno</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Sukiman</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Joko Prasetyo</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Winarko</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>Yunata Krisha</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>Suparto</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>Asnan</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>Resiono</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sungkono</td>
                    <td>50</td>
                    <td>0</td>
                    <td>-30</td>
                    <td>20</td>
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
    let is_da_open = true //Hasil Sementara
    $('#btn-minimize-DA').click(function() {
      $('#card-DA').toggle('fast')
      if (is_da_open) {
        $('#icon-DA').removeClass('fa fa-minus');
        $('#icon-DA').addClass('fa fa-plus');
        is_da_open = false
      } else {
        $('#icon-DA').removeClass('fa fa-plus');
        $('#icon-DA').addClass('fa fa-minus');
        is_da_open = true
      }
    });

    let is_pc_open = true //Pairwase Contest
    $('#btn-minimize-PC').click(function() {
      $('#card-PC').toggle('fast')
      if (is_pc_open) {
        $('#icon-PC').removeClass('fa fa-plus');
        $('#icon-PC').addClass('fa fa-minus');
        is_pc_open = false
      } else {
        $('#icon-PC').removeClass('fa fa-minus');
        $('#icon-PC').addClass('fa fa-plus');
        is_pc_open = true
      }
    });

    let is_hcs_open = true //Hasil Copeland Score
    $('#btn-minimize-HCS').click(function() {
      $('#card-HCS').toggle('fast')
      if (is_hcs_open) {
        $('#icon-HCS').removeClass('fa fa-plus');
        $('#icon-HCS').addClass('fa fa-minus');
        is_hcs_open = false
      } else {
        $('#icon-HCS').removeClass('fa fa-minus');
        $('#icon-HCS').addClass('fa fa-plus');
        is_hcs_open = true
      }
    });

    let is_vi_open = true //Perankingan Alternatif
    $('#btn-minimize-VI').click(function() {
      $('#card-VI').toggle('fast')
      if (is_vi_open) {
        $('#icon-VI').removeClass('fa fa-plus');
        $('#icon-VI').addClass('fa fa-minus');
        is_vi_open = false
      } else {
        $('#icon-VI').removeClass('fa fa-minus');
        $('#icon-VI').addClass('fa fa-plus');
        is_vi_open = true
      }
    });
  </script>
</body>

</html>