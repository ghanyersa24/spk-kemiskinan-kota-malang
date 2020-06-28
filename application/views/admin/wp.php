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

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Weighted Product
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
					<!-- Vector Si -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Vector Si</span>
						<button type="button" id="btn-minimize-VS" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-VS"></i>
						</button>
					</div>
					<div class="card-body" id="card-VS" style="display: none">
						<div class="table-responsive">
							<div id="individu-vektor-si" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
											<th>Nilai S</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-vektor-si">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Perumahan</th>
											<th>Asset</th>
											<th>Nilai S</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<!-- Vector Vi -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Vector Vi</span>
						<button type="button" id="btn-minimize-VV" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-VV"></i>
						</button>
					</div>
					<div class="card-body" id="card-VV" style="display: none">
						<div class="table-responsive">
							<div id="individu-vektor-vi" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>V</th>
											<th>Nama</th>
											<th>Vector Vi</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-vektor-vi">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>V</th>
											<th>Nama</th>
											<th>Vector Vi</th>
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
											<th>Vector Vi</th>
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
											<th>Vector Vi</th>
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
				url: api + 'WP/individu',
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
									return row.pendidikan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.kesehatan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.ekonomi.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-vektor-si table').DataTable({
						data: response.data.vektor_si.nilai,
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
									return row.pendidikan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.kesehatan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.ekonomi.toFixed(5)
								},
								className: "text-center"
							}, {
								"render": function(data, type, row) {
									return row.s.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-vektor-vi table').DataTable({
						data: response.data.vektor_vi,
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
									return row.hasil.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-ranking table').DataTable({
						data: response.data.vektor_vi,
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
									return row.hasil.toFixed(5)
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
				url: api + 'WP/keluarga',
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
									return row.perumahan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.asset.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-vektor-si table').DataTable({
						data: response.data.vektor_si.nilai,
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
									return row.perumahan.toFixed(5)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.asset.toFixed(5)
								},
								className: "text-center"
							}, {
								"render": function(data, type, row) {
									return row.s.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-vektor-vi table').DataTable({
						data: response.data.vektor_vi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.nama
								},
							},
							{
								"render": function(data, type, row) {
									return row.hasil.toFixed(5)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-ranking table').DataTable({
						data: response.data.vektor_vi,
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
									return row.hasil.toFixed(5)
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
				$('#keluarga-vektor-si').show()
				$('#keluarga-vektor-vi').show()
				$('#keluarga-ranking').show()

				$('#individu-alternatif').hide()
				$('#individu-vektor-si').hide()
				$('#individu-vektor-vi').hide()
				$('#individu-ranking').hide()
			} else {
				ajax_individu()

				$('#keluarga-alternatif').hide()
				$('#keluarga-vektor-si').hide()
				$('#keluarga-vektor-vi').hide()
				$('#keluarga-ranking').hide()

				$('#individu-alternatif').show()
				$('#individu-vektor-si').show()
				$('#individu-vektor-vi').show()
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

		let is_vs_open = true //vector Si
		$('#btn-minimize-VS').click(function() {
			$('#card-VS').toggle('fast')
			if (is_vs_open) {
				$('#icon-VS').removeClass('fa fa-plus');
				$('#icon-VS').addClass('fa fa-minus');
				is_vs_open = false
			} else {
				$('#icon-VS').removeClass('fa fa-minus');
				$('#icon-VS').addClass('fa fa-plus');
				is_vs_open = true
			}
		});

		let is_vv_open = true //Vector Vi
		$('#btn-minimize-VV').click(function() {
			$('#card-VV').toggle('fast')
			if (is_vv_open) {
				$('#icon-VV').removeClass('fa fa-plus');
				$('#icon-VV').addClass('fa fa-minus');
				is_vv_open = false
			} else {
				$('#icon-VV').removeClass('fa fa-minus');
				$('#icon-VV').addClass('fa fa-plus');
				is_vv_open = true
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
