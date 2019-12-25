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

  <?php $this->load->view("admin/_partials/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Data Bobot Kriteria</div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="form-inline">
                  <a href="<?php echo site_url('admin/form') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-pencil"></i> Edit Bobot</button></a>
              </div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Jenis Indikator</th>
                    <th>Urutan Prioritas</th>
                    <th>Bobot Indikator</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Ekonomi</td>
                    <td>Lebih penting</td>
                    <td>41.62%</td>
                    <td>
                      <a href="#">
                      <i class="far fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Kesehatan</td>
                    <td>Sedikit lebih penting dari cukup penting</td>
                    <td>26.18%</td>
                    <td>
                      <a href="#">
                      <i class="far fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Pendidikan</td>
                    <td>Cukup penting</td>
                    <td>16.11%</td>
                    <td>
                      <a href="#">
                      <i class="far fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Rumah</td>
                    <td>Sedikit lebih penting dari sama penting</td>
                    <td>09.86%</td>
                    <td>
                      <a href="#">
                      <i class="far fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Asset</td>
                    <td>Sama penting</td>
                    <td>06.24%</td>
                    <td>
                      <a href="#">
                       <i class="far fa-edit"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
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