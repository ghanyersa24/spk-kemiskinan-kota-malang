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

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 200px; " >

        <h5 style="margin-bottom : 3px;" >Edit Data Kriteria</h5>
        <small style="color: #ffc156; margin-top: -10px !important; margin-bottom : 20px;" id="kembali" class="hovercursor"> <i class="fa fa-chevron-circle-left"></i> Kembali ke Data </small>

        <div class="card mb-3" style="margin-top: 20px; " >
        <div class="card-header" style="padding : 0 !important;"></div>
          <div class="card-body">
            <div class="table-responsive" style="height: 100%;display: flex; align-items: center;justify-content: center;">
                <div class="col-md-5" style="text-align: center;" >
                    <div class="form-group"  >
                        <h5>Jenis Indikator</h5>
                        <br>
                        <label>Jenis</label> 
                        <select class="form-control select2" style="width: 50%;margin-left:200px;" id="input-jenis-indikator" name="JenisIndikator" required="required">
                            <option value="ekonomi">Ekonomi</option>
                            <option value="kesehatan">Kesehatan</option>
                            <option value="pendidikan">Pendidikan</option>
                            <option value="rumah">Rumah</option>
                            <option value="asset">Asset</option>
                        </select>
                        <br>
                        <br>
                        <a id="btn-edit-detail" href="" class="btn_a_style"> <button class="btn btn-warning"> Selanjutnya </button></a>
                    </div>

                </div>
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
  <script>
        $("#btn-edit-detail").on("click", function(e){
            var base_url = "<?php echo site_url('admin/bobot/edit'); ?>";
            $("#btn-edit-detail").attr("href", base_url + "/" + $("#input-jenis-indikator").val()  );
        });

        $("#kembali").on("click" , function(e){
            window.location.href = "<?php echo base_url("admin/bobot"); ?>";
        });
    </script>
</body>

</html>