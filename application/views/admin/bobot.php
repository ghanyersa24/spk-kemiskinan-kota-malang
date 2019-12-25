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

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; " >

      <h5 style="margin-bottom : 3px;" >Data Kriteria Kemiskinan <small> Dinas Sosial Kota Malang </small> </h5>

      <div class="form-inline" style="margin-bottom:20px; margin-top:20px;" >
          <a href="<?php echo site_url('admin/bobot/edit') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-pencil"></i> Edit Bobot</button></a>
      </div>

        <!-- DataTables -->
        <div class="card mb-3">
          <div class="card-header" style="padding : 0rem !important;"></div>
          <div class="card-body">
            <div class="table-responsive">            
              <table style="margin-top : 40px;" class="table table-bordered" id="tableBobotIndikator" width="100%" cellspacing="0">
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
                        <i class="fa fa-file-o"></i>
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
                        <i class="fa fa-file-o"></i>
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
                        <i class="fa fa-file-o"></i>
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
                        <i class="fa fa-file-o"></i>
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
                        <i class="fa fa-file-o"></i>
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

<script type="text/javascript">

    var tabel = null;
    $(document).ready(function() {
        tabel = $('#tableBobotIndikator').DataTable({
            "language" : {
                "url" : "//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable" : "Tidads"
            },
            "processing": true,
            "ordering": true, // Set true agar bisa di sorting
            "searching" : false,
            "lengthChange" : false,
            "columnDefs" : [
                {"targets" : 4 , "orderable" : false}
            ],
        });
    })

</script>