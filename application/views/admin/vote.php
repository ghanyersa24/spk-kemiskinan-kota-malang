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

        <h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Voting
          <select class="form-control col-md-2" style="margin-right:10px;">
            <option value="">Semua Jenis</option>
            <option value="">Perorangan</option>
            <option value="">Rumah Tangga</option>
          </select>
        </h5>

        <div class="card mb-3">
            <!-- Voting -->
            <div class="card-header d-flex justify-content-between">
              <span>
                <i class="fa fa-calculator" aria-hidden="true"></i>
                Voting
              </span>
            </div>

            <div class="card-body" id="card-VT" style="display: block">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>Nama Alternatif</th>
                      <th>Poin</th>
                      <th>Voting</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Yasin</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Adi Sutrisno</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Sukiman</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>04</td>
                      <td>Joko Prasetyo</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>05</td>
                      <td>Winarko</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>06</td>
                      <td>Yunata Krisha</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>07</td>
                      <td>Suparto</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>08</td>
                      <td>Asnan</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>09</td>
                      <td>Resiono</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
                          </button></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Sungkono</td>
                      <td>50</td>
                      <td><button type="button" id="testBtn" class="btn btn-default fa fa-thumbs-up " data-loading-text=" ... ">
                          </button>
                        <button type="button" id="testBtnDown" class="btn btn-default fa fa-thumbs-down" data-loading-text=" ... ">
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