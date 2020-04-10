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

      <div class="container-fluid" style="padding-top: 20px; background-color: #ecf0f5; padding-bottom: 200px; " >

      <h5 style="margin-bottom : 3px;" >Voting - Copeland Score </h5>

        <div class="card mb-3" style="margin-top: 20px; " >
        <div class="card-header" style="padding : 0 !important;"></div>

          <div class="card-body">
            <h5>Hasil Voting</h5>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTableHsailVoting" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Ranking</th>
                    <th>Id Alternatif</th>
                    <th>Nama Penerima</th>
                    <th>Poin</th>
                    <th>Jumlah Pemilih</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>A1</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>A2</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>A3</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>A4</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>A5</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td>A6</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>A7</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>08</td>
                    <td>A8</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>A9</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>A10</td>
                    <td>Reza Syahputra</td>
                    <td>50</td>
                    <td>3</td>
                  </tr>
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
    
</body>
</html>