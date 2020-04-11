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

        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Manajemen User</h5>
        <div class="form-inline" style="margin-bottom:20px; margin-top:20px;">
          <div class="col-md-6" style="padding: 0px; color: #555555! important;">
            <a href="<?php echo site_url('') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Tambah Data</button></a>
          </div>
        </div>
        <div class="card mb-3">
          <!-- Voting -->
          <div class="card-header d-flex justify-content-between">
            <span>
              <i class="fa fa-calculator" aria-hidden="true"></i>
              Manajemen User
            </span>
          </div>

          <div class="card-body" id="card-VT" style="display: block">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Peran</th>
                    <th>Hak Akese</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Admin</td>
                    <td>Akses Penuh</td>
                    <td><button type="button" id="testBtn" class="btn btn-default fa fa-pencil " data-loading-text=" ... ">
                      </button>
                      <button type="button" id="testBtnDown" class="btn btn-default fa fa-trash" data-loading-text=" ... ">
                      </button></td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Kelurahan</td>
                    <td>Dashboard, Tambah data, Edit Bobot, Voting</td>
                    <td><button type="button" id="testBtn" class="btn btn-default fa fa-pencil " data-loading-text=" ... ">
                      </button>
                      <button type="button" id="testBtnDown" class="btn btn-default fa fa-trash" data-loading-text=" ... ">
                      </button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Kecamatan</td>
                    <td>Dashboard, Tambah data, Edit Bobot, Voting</td>
                    <td><button type="button" id="testBtn" class="btn btn-default fa fa-pencil " data-loading-text=" ... ">
                      </button>
                      <button type="button" id="testBtnDown" class="btn btn-default fa fa-trash" data-loading-text=" ... ">
                      </button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Dinas Sosial</td>
                    <td>Dashboard, Tambah data, Edit Bobot, Voting</td>
                    <td><button type="button" id="testBtn" class="btn btn-default fa fa-pencil " data-loading-text=" ... ">
                      </button>
                      <button type="button" id="testBtnDown" class="btn btn-default fa fa-trash" data-loading-text=" ... ">
                      </button></td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Publik</td>
                    <td>Dashboard</td>
                    <td><button type="button" id="testBtn" class="btn btn-default fa fa-pencil " data-loading-text=" ... ">
                      </button>
                      <button type="button" id="testBtnDown" class="btn btn-default fa fa-trash" data-loading-text=" ... ">
                      </button></td>
                  </tr>
                </tbody>
              </table>
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
    <script>
      let is_vt_open = true //Voting
      $('#btn-minimize-VT').click(function() {
        $('#card-VT').toggle('fast')
        if (is_vt_open) {
          $('#icon-VT').removeClass('fa fa-minus');
          $('#icon-VT').addClass('fa fa-plus');
          is_vt_open = false
        } else {
          $('#icon-VT').removeClass('fa fa-plus');
          $('#icon-VT').addClass('fa fa-minus');
          is_vt_open = true
        }
      });
    </script>
</body>

</html>