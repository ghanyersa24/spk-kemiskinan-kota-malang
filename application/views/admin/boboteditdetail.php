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

    <div id="content-wrapper" style="padding-top:0px; ">

    <?php $this->load->view("admin/_partials/navbar.php") ?>

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom:10px; " >

        <h5 style="margin-bottom : 3px;" >Edit Data Kriteria</h5>
        <small style="color: #ffc156; margin-top: -10px !important; margin-bottom : 20px;" id="kembali" class="hovercursor"> <i class="fa fa-chevron-circle-left"></i> Kembali ke Data </small>

        <!-- DataTables -->
        <div class="card mb-3" style="margin-top: 20px;" >
          <div class="card-header" style="padding : 0 !important;"></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="tableBobot" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Kriteria</th>
                    <th>Sub Kriteria</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Kesehatan</td>
                    <td>Status Kehamilan</td>
                    <td>Ya</td>
                    <td>2,32</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Kesehatan</td>
                    <td>Status Kehamilan</td>
                    <td>Tidak</td>
                    <td>0,85</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tidak Cacat</td>
                    <td>1,35</td>
                    <td>    
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Daksa/Cacat Tubuh </td>
                    <td>0,45</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Netra/Buta</td>
                    <td>0,45</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Rungu</td>
                    <td>0,45</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Wicara</td>
                    <td>0,45</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Rungu dan Wicara</td>
                    <td>0,98</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Netra dan Cacat Tubuh</td>
                    <td>0,45</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Kesehatan</td>
                    <td>Jenis Cacat</td>
                    <td>Tuna Netra, Rungu dan Wicara</td>
                    <td>2,19</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>  
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted" style="color: #ff2727 !important;" >Bobot masih tersisa 1.1%</div>
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
        tabel = $('#tableBobot').DataTable({
            "language" : {
                "url" : "//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable" : "Tidads"
            },
            "processing": true,
            "ordering": true, // Set true agar bisa di sorting
            "searching" : false,
            "lengthChange" : false,
            "columnDefs" : [
                {"targets" : 5 , "orderable" : false}
            ],
        });
    })

    $("#kembali").on("click" , function(e){
        window.location.href = "<?php echo base_url("admin/bobot"); ?>";
    });

</script>



