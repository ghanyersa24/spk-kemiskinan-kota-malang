<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

  <?php $this->load->view("admin/_partials/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            Konversi Data</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Id Nama</th>
                    <th>Nama Penerima</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>02</td>
                    <td>A2</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A3</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A4</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A5</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A6</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A7</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A8</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A9</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A10</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>A1</td>
                    <td>Reza Syahputra</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            Perbandingan Berpasangan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            Penerapan Fungsi Preferensi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            Matriks Indeks Preferensi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
          <i class="fa fa-calculator" aria-hidden="true"></i>
            Partial Ranking</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>D (a,b)</th>
                    <th>Kriteria 1 (C1)</th>
                    <th>Kriteria 2 (C2)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A1,A2</td>
                    <td>02.00</td>
                    <td>02.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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