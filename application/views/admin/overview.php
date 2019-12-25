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

      <div class="content container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- Icon Cards-->
        <!--Infografis Kemiskinan-->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>30</h3>
                <p>Jumlah Alternatif <br> yang digunakan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>5<sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Indikator <br> yang digunakan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>27</h3>

                <p>Jumlah Kriteria <br> yang digunakan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>65</h3>

                <p>Jumlah petugas<br>survey</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- Area Chart Example-->
        <div class="row">
          <!--Grafik Catatan Kemiskinan-->
          <div class="col-md-12 ">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Laporan Bulanan</h3>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Laporan penerima bantuan kemiskinan Tahun 2018</strong>
                      </p>
                      <div class="chart">
                        <canvas id="salesChart" style="height: 180px;"></canvas>
                      </div>
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
        </div>
        <div class="row">
          <!--Donut Chart PMKS-->
          <div class="col-md-8">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Penyandang Masalah Kesejahteraan Sosial (PMKS)<br><br>
                  <small>Jumlah Penerima bamyiam kemiskinan : 1256</small>
                </h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="334" width="618" style="width: 309px; height: 167px;"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="fa fa-circle-o text-red"></i> Anak berkebutuhan khusus</li>
                      <li><i class="fa fa-circle-o text-green"></i> Pengemis</li>
                      <li><i class="fa fa-circle-o text-yellow"></i> Anak jalanan</li>
                      <li><i class="fa fa-circle-o text-aqua"></i> Gelandangan</li>
                      <li><i class="fa fa-circle-o text-light-blue"></i> Anak balita terlantar</li>
                      <li><i class="fa fa-circle-o text-gray"></i> Anak yang bermasalah dengan hukum</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Informasi Penyebab Kemiskinan</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url('assets/dist/img/default-50x50.gif') ?>" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Pendidikan Rendah
                        <span class="label label-warning pull-right">62%</span></a>
                      <span class="product-description">Berpendidikan maksimal hanya sampai <br> kelas 2 SMP atau sederajat
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url('assets/dist/img/default-50x50.gif') ?>" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Pengangguran
                        <span class="label label-info pull-right">19%</span></a>
                      <span class="product-description">
                        Tidak memiliki pekerjaan sehingga <br> tidak mampu memenuhi kebutuhan <br>pokok sehari-harinya
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url('assets/dist/img/default-50x50.gif') ?>" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Penyakit<span class="label label-danger pull-right">13%</span></a>
                      <span class="product-description">
                        Mengalami penyakit kronis dan <br> tidak mampu berobat ke rumah sakit <br> kecuali yang disubsidi oleh pemerintah </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url('assets/dist/img/default-50x50.gif') ?>" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Lainnya
                        <span class="label label-success pull-right">6%</span></a>
                      <span class="product-description">
                        Penyebab tidak diketahui secara pasti
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.content -->
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
  <script src="<?php echo base_url('assets/bootstrap/dist/js/pages/dashboard2.js') ?>"></script>
  <script src="<?php echo base_url('assets/chart.js/Chart.js') ?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>

</body>

</html>
