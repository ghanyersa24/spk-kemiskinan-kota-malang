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
            Data Alternatif</div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="form-inline">
                <div class="col-md-6">
                  <a href="<?php echo site_url('admin/form') ?>" class="btn_a_style"> <button class="btn btn-warning"><i class="fa fa-plus-circle"></i> Tambah Data</button></a>
                </div>
                <select class="form-control col-md-3">
                      <option value="">Semua Jenis</option>
                      <option value="">Perorangan</option>
                      <option value="">Keluarga</option>
                </select>
                <input type="text" id="input-search" name="search" placeholder="Search" class="form-control col-md-3">
              </div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Jenis</th>
                    <th>Nama Penerima</th>
                    <th>Alamat</th>
                    <th>Tanggal Survey</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td>01</td>
                    <td>Perorangan</td>
                    <td>Reza Syahputra</td>
                    <td>Jl. Bunga Ikan Mas</td>
                    <td>07/09/2019</td>
                    <td>
                      <a href="#">
                        <i class="fa fa-file-o"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr> -->
                  
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
  <script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "<?php echo base_url('api/Formulir/listdata') ?>", 
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], 
            "columns": [
                { "data": "id_survey" }, 
                { "render" : function (data, type, row){
                    return row.IdJenisPenerima == "1" ? "Perorangan" : "Keluarga";
                }},  
                { "render" : function (data, type, row){
                   return row.IdJenisPenerima == "1" ? row.NamaPerorangan : row.NamaKeluarga;
                }},  
                { "render" : function (data, type, row){
                   return row.IdJenisPenerima == "1" ? row.AlamatPerorangan : row.AlamatKeluarga;
                }},  
                { "data": "TglPemeriksa" },  
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = '<a href="#">'+ 
                                    '<i class="fa fa-file-o"></i>'+
                                  '</a>'+
                                  '<a href="#">'+
                                    '<i class="fa fa-pencil"></i>'+
                                  '</a>'+
                                  '<a href="#">'+
                                    '<i class="fa fa-trash"></i>'+
                                  '</a>';
                        return html
                    }
                },
            ],
        });
    });
  </script>
</body>

</html>