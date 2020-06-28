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

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Simple Additive Weighting
					<select class="form-control col-md-2" style="margin-right:10px;" id="select-type">
						<option value="individu">Individu</option>
						<option selected value="keluarga">Keluarga</option>
					</select>
				</h5>

				<div class="card mb-3">
					<!-- Data Alternatif -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Data Alternatif</span>
						<button type="button" id="btn-minimize-DA" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-minus" id="icon-DA"></i>
						</button>
					</div>
					<div class="card-body" id="card-DA" style="display: block">
						<div class="table-responsive">
							<div id="individu-alternatif" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-alternatif">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Perumahan</th>
											<th>Asset</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>

				<div class="card mb-3">
					<!-- Normalisasi -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Normalisasi : Membuat matriks R</span>
						<button type="button" id="btn-minimize-NR" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-NR"></i>
						</button>
					</div>
					<div class="card-body" id="card-NR" style="display: none">
						<div class="table-responsive">
							<div id="individu-normalisasi" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-normalisasi">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Perumahan</th>
											<th>Asset</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<!-- Vector V -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Vector V</span>
						<button type="button" id="btn-minimize-V" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-V"></i>
						</button>
					</div>
					<div class="card-body" id="card-V" style="display: none">
						<div class="table-responsive">
							<div id="individu-vektor-v" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
											<th>Jumlah</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-vektor-v">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Perumahan</th>
											<th>Asset</th>
											<th>Jumlah</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<!-- Perankingan Alternatif -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Perangkingan Alternatif</span>
						<button type="button" id="btn-minimize-VI" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-VI"></i>
						</button>
					</div>
					<div class="card-body" id="card-VI" style="display: none">
						<div class="table-responsive">
							<div id="individu-ranking" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Jumlah Vektor V</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-ranking">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Jumlah Vektor V</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>

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
		function ajax_individu() {
			$.ajax({
				type: "GET",
				url: api + 'SAW/individu',
				success: function(response) {
					$('#individu-alternatif table').DataTable({
						data: response.data.alternatif.nilai,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.pendidikan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.kesehatan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.ekonomi.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-normalisasi table').DataTable({
						data: response.data.normalisasi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.pendidikan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.kesehatan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.ekonomi.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-vektor-v table').DataTable({
						data: response.data.vektor_v,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.pendidikan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.kesehatan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.ekonomi.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.jumlah.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-ranking table').DataTable({
						data: response.data.vektor_v,
						order: [
							[2, "desc"]
						],
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.jumlah.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
				}
			})
		}

		function ajax_keluarga() {
			$.ajax({
				type: "GET",
				url: api + 'SAW/keluarga',
				success: function(response) {
					$('#keluarga-alternatif table').DataTable({
						data: response.data.alternatif.nilai,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.perumahan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.asset.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-normalisasi table').DataTable({
						data: response.data.normalisasi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.perumahan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.asset.toFixed(2)
								},
								className: "text-center"
							}
						]
					});

					$('#keluarga-vektor-v table').DataTable({
						data: response.data.vektor_v,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							},
							{
								"render": function(data, type, row) {
									return row.perumahan.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.asset.toFixed(2)
								},
								className: "text-center"
							}, {
								"render": function(data, type, row) {
									return row.jumlah.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-ranking table').DataTable({
						data: response.data.vektor_v,
						order: [
							[2, "desc"]
						],
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								}
							}, {
								"render": function(data, type, row) {
									return row.jumlah.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
				}
			})
		}
		$('#select-type').change(function() {
			if ($('#select-type').val() == 'keluarga') {
				ajax_keluarga()

				$('#keluarga-alternatif').show()
				$('#keluarga-normalisasi').show()
				$('#keluarga-vektor-v').show()
				$('#keluarga-ranking').show()

				$('#individu-alternatif').hide()
				$('#individu-normalisasi').hide()
				$('#individu-vektor-v').hide()
				$('#individu-ranking').hide()
			} else {
				ajax_individu()
				$('#keluarga-alternatif').hide()
				$('#keluarga-normalisasi').hide()
				$('#keluarga-vektor-v').hide()
				$('#keluarga-ranking').hide()

				$('#individu-alternatif').show()
				$('#individu-normalisasi').show()
				$('#individu-vektor-v').show()
				$('#individu-ranking').show()
			}
		});
		$(document).ready(function() {
			ajax_keluarga()
		});
	</script>
	<script>
		let is_da_open = true //Data Alternatif
		$('#btn-minimize-DA').click(function() {
			$('#card-DA').toggle('fast')
			if (is_da_open) {
				$('#icon-DA').removeClass('fa fa-minus');
				$('#icon-DA').addClass('fa fa-plus');
				is_da_open = false
			} else {
				$('#icon-DA').removeClass('fa fa-plus');
				$('#icon-DA').addClass('fa fa-minus');
				is_da_open = true
			}
		});

		let is_nr_open = true //Normalisasi Matriks R
		$('#btn-minimize-NR').click(function() {
			$('#card-NR').toggle('fast')
			if (is_nr_open) {
				$('#icon-NR').removeClass('fa fa-plus');
				$('#icon-NR').addClass('fa fa-minus');
				is_nr_open = false
			} else {
				$('#icon-NR').removeClass('fa fa-minus');
				$('#icon-NR').addClass('fa fa-plus');
				is_nr_open = true
			}
		});

		let is_v_open = true //Vector V
		$('#btn-minimize-V').click(function() {
			$('#card-V').toggle('fast')
			if (is_v_open) {
				$('#icon-V').removeClass('fa fa-plus');
				$('#icon-V').addClass('fa fa-minus');
				is_v_open = false
			} else {
				$('#icon-V').removeClass('fa fa-minus');
				$('#icon-V').addClass('fa fa-plus');
				is_v_open = true
			}
		});

		let is_vi_open = true //Perankingan Alternatif
		$('#btn-minimize-VI').click(function() {
			$('#card-VI').toggle('fast')
			if (is_vi_open) {
				$('#icon-VI').removeClass('fa fa-plus');
				$('#icon-VI').addClass('fa fa-minus');
				is_vi_open = false
			} else {
				$('#icon-VI').removeClass('fa fa-minus');
				$('#icon-VI').addClass('fa fa-plus');
				is_vi_open = true
			}
		});
	</script>
</body>

</html>
