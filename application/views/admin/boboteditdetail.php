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
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted" style="color: #ff2727 !important;" id="sisabobot" ></div>
        </div>


        <div class="modal fade" id="modalEditBobot" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 ><span class="glyphicon glyphicon-lock"></span> <span id="title-modal-penerima"> Edit Bobot</span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label>
                        Bobot saat ini :
                      </label>
                      <input class="pull-right" type="number" name="bobotLama" id="bobotLama" disabled> 
                  </div>
                  <div class="form-group">
                    <label>
                      Ubah bobot :
                    </label>
                    <input class="pull-right" type="number" name="bobotBaru" id="bobotBaru" > 
                  </div>
                  <div class="small text-muted" style="color: #ff2727 !important;" id="sisabobotmodal" ></div>
              </div>
              <div class="modal-footer">
                <div class="form-inline" >
                    <a href="<?php echo site_url('admin/bobot/edit') ?>" class=""> <button class="btn btn-warning">Simpan</button></a>
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

  </body>

</html>

<script type="text/javascript">

    var arrIndikator = ['ekonomi', 'kesehatan', 'pendidikan' , 'rumah', 'asset' ];

    var tabel1 = null;
    $(document).ready(function() {

      tabel1 = $('#tableBobot').DataTable({
            "language" : {
                "url" : "//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable" : "Tidads"
            },
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "searching" : false,
            "lengthChange" : false,
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "<?php echo base_url('api/Formulir/listsubkriteria') ?>", 
                "data" : { "id_indikator" :  arrIndikator.indexOf( window.location.pathname.split("/").pop() ) + 1  },
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[10, 50],[ 10, 50]], 
            "columns": [
                { "render": function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }}, 
                { "render" : function (data, type, row){
                    return row.indikator;
                }},  
                { "render" : function (data, type, row){
                   return row.kriteria;
                }},  
                { "render" : function (data, type, row){
                   return row.subkriteria;
                }},  
                { "render" : function (data, type, row){
                   return Number(row.bobot).toFixed(3) ;
                }},  
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = '<a class="hovercursor" onclick="modalEditBobot('+row.id+', '+ Number(row.bobot).toFixed(3)  +');">'+
                                    '<i class="fa fa-pencil"></i>'+
                                  '</a>' ;
                        return html
                    }
                },
            ],
        });

        getSisaBobot();

    });


    var double_sisa = 0;
    var double_sisa_constants = 0;
    function getSisaBobot(){
       $.ajax({
        "url" : "<?php echo base_url('api/Formulir/getSisaBobot') ?>", 
        "success" : function(e){
          var sisa = Number(e.result[0].bobot).toFixed(3);
          $("#sisabobot").text("Bobot masih tersisa "+sisa+" %")
          $("#sisabobotmodal").text("Bobot yang masih tersisa "+sisa+" %")
          double_sisa = sisa;
          double_sisa_constants = sisa;
        }
       });
    }

    function modalEditBobot(id, bobot){
      $("#bobotLama").val(bobot);
      $("#bobotBaru").val(bobot);
      $("#modalEditBobot").modal("toggle");
    }

    $("#bobotBaru").keyup(function(e){
      perubahanBobot(e);
    });

    $("#bobotBaru").change(function(e){
      perubahanBobot(e);
    });

    function perubahanBobot(e){
      var diff = 0;
      if(e.target.valueAsNumber <= $("#bobotLama").val()  ){
        diff = $("#bobotLama").val() - e.target.valueAsNumber
      }else if( e.target.valueAsNumber > $("#bobotLama").val() && double_sisa != 0 ){
        diff = e.target.valueAsNumber - $("#bobotLama").val() 
      }else{
        var lama = Number( $("#bobotLama").val() )
        var constant = Number ( double_sisa_constants );
        var sama = Number ( lama + constant );        
        $("#bobotBaru").val( sama );
      }
      diff = diff.toFixed(3);
      double_sisa = diff;
      $("#sisabobotmodal").text("Bobot yang masih tersisa "+double_sisa+" %")
    }


    $("#kembali").on("click" , function(e){
        window.location.href = "<?php echo base_url("admin/bobot"); ?>";
    });

</script>



