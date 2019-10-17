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
            <i class="fa fa-handshake-o"></i>
            Perbandingan Manualisasi dan Program</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Alternatif</th>
                    <th>Rangking Manualisasi</th>
                    <th>Rangking Program</th>
                    <th>Akurasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>A</td>
                    <td>1</td>
                    <td>2</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>B</td>
                    <td>2</td>
                    <td>1</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>C</td>
                    <td>3</td>
                    <td>4</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>D</td>
                    <td>4</td>
                    <td>5</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>E</td>
                    <td>5</td>
                    <td>3</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>F</td>
                    <td>6</td>
                    <td>6</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>G</td>
                    <td>7</td>
                    <td>7</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>H</td>
                    <td>8</td>
                    <td>8</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>I</td>
                    <td>9</td>
                    <td>9</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>J</td>
                    <td>10</td>
                    <td>10</td>
                    <td>1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Akurasi alternatif: 50%</div>
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