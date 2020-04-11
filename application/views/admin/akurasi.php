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
        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Confusion Matrix
          <select class="form-control col-md-2" style="margin-right:10px;">
            <option value="">Perorangan</option>
            <option value="">Rumah Tangga</option>
          </select>
        </h5>

        <div class="card mb-3">
          <!-- Data Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
              Prediksi penerima Bantuan Kemiskinan di Kota Malang</span>
            <button type="button" id="btn-minimize-A" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-minus" id="icon-A"></i>
            </button>
          </div>
          <div class="card-body" id="card-A"style="display: block">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Ranking</th>
                    <th>Nama Alternatif</th>
                    <th>Poin</th>
                    <th>Status sebenarnya</th>
                    <th>Hasil Prediksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Muhammad Fajar</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Ghany Abdillah</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Tidak berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Rizky Wahyu Aji</td>
                    <td>50</td>
                    <td>Tidak berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Sisco Jupiyandi</td>
                    <td>50</td>
                    <td>Tidak berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Ridwan Fajar</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Tidak berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Muhammad Ridho</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Muhammad Hidayat</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Fajrian Muchtar</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Muhammad Fajar</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Muhammad Iko Akbar</td>
                    <td>50</td>
                    <td>Berhak menerima bantuan</td>
                    <td>Berhak menerima bantuan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
             Accuracy</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none"></div>
        </div>

        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
            Precission</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none"></div>
        </div>

        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
            Recall (Sensitifitas)</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none"></div>
        </div>

        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
            Specificity</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none"></div>
        </div>
        <div class="card mb-3"> <!-- Perankingan Alternatif -->
          <div class="card-header d-flex justify-content-between">
            <span><i class="fa fa-calculator" aria-hidden="true"></i>
            F1 Score</span>
            <button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
              <i class="fa fa-plus" id="icon-PA"></i>
            </button>
          </div>
          <div class="card-body" id="card-PA" style="display: none"></div>
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
  <script>
    let is_a_open = true //Data Alternatif
    $('#btn-minimize-A').click(function() {
      $('#card-A').toggle('fast')
      if (is_a_open) {
        $('#icon-A').removeClass('fa fa-minus');
        $('#icon-A').addClass('fa fa-plus');
        is_a_open = false
      } else {
        $('#icon-A').removeClass('fa fa-plus');
        $('#icon-A').addClass('fa fa-minus');
        is_a_open = true
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