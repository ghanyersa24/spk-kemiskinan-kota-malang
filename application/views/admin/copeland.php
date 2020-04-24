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

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">Copeland Score
					<select class="form-control col-md-2" style="margin-right:10px;" id="select-type">
						<option value="individu">Individu</option>
						<option selected value="keluarga">Keluarga</option>
					</select>
				</h5>

				<div class="card mb-3">
					<!-- Hasil Sementara -->
					<div class="card-header d-flex justify-content-between">
						<span>
							<i class="fa fa-calculator" aria-hidden="true"></i>
							Hasil Perhitungan Sementara <span class="method">PROMETHEE</span>
						</span>

						<div class="row" style="width: 205px">
							<select class="form-control col-9" id="select-method">
								<option value="promethee">PROMETHEE</option>
								<option value="wp">Weighted Product</option>
								<option value="saw">Simple Additive Weighting</option>
							</select>
							<button type="button" id="btn-minimize-DA" class="btn btn-tool d-inline col-3" data-card-widget="collapse">
								<i class="fa fa-minus" id="icon-DA"></i>
							</button>
						</div>
					</div>

					<div class="card-body" id="card-DA" style="display: block">
						<div class="table-responsive">
							<table class="table table-bordered" id="DA" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Nama</th>
										<th>Nama</th>
										<th>Jumlah</th>
										<th>posisi</th>
										<th>point</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>

				<div class="card mb-3">
					<!-- Pairwase Contest -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Pairwase Contest <span class="method">PROMETHEE</span>
						</span>
						<button type="button" id="btn-minimize-PC" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-PC"></i>
						</button>
					</div>
					<div class="card-body" id="card-PC" style="display: none">
						<div class="table-responsive">
							<table class="table table-bordered" id="pairwase" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama Alternatif</th>
										<th>Menang</th>
										<th>Seri</th>
										<th>Kalah</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<!-- Hasil Copelans -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Hasil Copeland Score</span>
						<button type="button" id="btn-minimize-HCS" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-HCS"></i>
						</button>
					</div>
					<div class="card-body" id="card-HCS" style="display: none">
						<div class="table-responsive">
							<table class="table table-bordered" id="perhitungan" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Alternatif</th>
										<th>Alternatif</th>
										<th>Menang</th>
										<th>Seri</th>
										<th>Kalah</th>
										<th>Poin</th>
									</tr>
								</thead>
							</table>
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
							<table class="table table-bordered" id="perankingan" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Ranking</th>
										<th>ID</th>
										<th>Nama Alternatif</th>
										<th>Point</th>
									</tr>
								</thead>
							</table>
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
		let response, ranking, pairwase

		function ajax_keluarga(callback) {
			$.ajax({
				type: 'GET',
				url: api + 'cs/keluarga',
				success: function(res) {
					response = res
					callback()
				}
			});
		}
		function ajax_individu(callback) {
			$.ajax({
				type: 'GET',
				url: api + 'cs/individu',
				success: function(res) {
					response = res
					callback()
				}
			});
		}

		function render() {
			if ($('#select-method').val() == 'promethee') {
				$('.method').text('PROMETHEE')
				ranking = response.data.METODE.PROMETHEE.ranking
				pairwase = response.data.METODE.PROMETHEE.pairwase
			} else if ($('#select-method').val() == 'wp') {
				$('.method').text('WP')
				ranking = response.data.METODE.WP.ranking
				pairwase = response.data.METODE.WP.pairwase

			} else if ($('#select-method').val() == 'saw') {
				$('.method').text('SAW')
				ranking = response.data.METODE.SAW.ranking
				pairwase = response.data.METODE.SAW.pairwase

			}
			$('#DA').DataTable().destroy()
			$('#DA').DataTable({
				data: ranking,
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
							return row.total.toFixed(2)
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.position
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.point
						},
						className: "text-center"
					}
				]
			})

			$('#pairwase').DataTable().destroy()
			$('#pairwase').DataTable({
				data: pairwase,
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
							return row.menang
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.seri
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.kalah
						},
						className: "text-center"
					}
				]
			})

			$('#perhitungan').DataTable().destroy()
			$('#perhitungan').DataTable({
				data: response.data.PERHITUNGAN,
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
							return row.menang
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.seri
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.kalah
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.point
						},
						className: "text-center"
					}
				]
			})

			$('#perankingan').DataTable().destroy()
			$('#perankingan').DataTable({
				data: response.data.PERANKINGAN,
				columns: [{
						"render": function(data, type, row, meta) {
							return row.position
						},
						className: "text-center"
					},
					{
						"render": function(data, type, row) {
							return row.id
						}
					},
					{
						"render": function(data, type, row) {
							return row.nama
						}
					},
					{
						"render": function(data, type, row) {
							return row.point
						},
						className: "text-center"
					},
				]
			})
		}

		$('#select-type').change(function() {
			if ($('#select-type').val() == 'keluarga') {
				ajax_keluarga(render)
			} else {
				ajax_individu(render)
			}
		});
		$('#select-method').change(function() {
			if ($('#select-method').val() == 'promethee') {
				render()
			} else if ($('#select-method').val() == 'wp') {
				render()
			} else {
				render()
			}
		});
		$(document).ready(function() {
			ajax_keluarga(render)
		});
	</script>
	<script>
		let is_da_open = true //Hasil Sementara
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

		let is_pc_open = true //Pairwase Contest
		$('#btn-minimize-PC').click(function() {
			$('#card-PC').toggle('fast')
			if (is_pc_open) {
				$('#icon-PC').removeClass('fa fa-plus');
				$('#icon-PC').addClass('fa fa-minus');
				is_pc_open = false
			} else {
				$('#icon-PC').removeClass('fa fa-minus');
				$('#icon-PC').addClass('fa fa-plus');
				is_pc_open = true
			}
		});

		let is_hcs_open = true //Hasil Copeland Score
		$('#btn-minimize-HCS').click(function() {
			$('#card-HCS').toggle('fast')
			if (is_hcs_open) {
				$('#icon-HCS').removeClass('fa fa-plus');
				$('#icon-HCS').addClass('fa fa-minus');
				is_hcs_open = false
			} else {
				$('#icon-HCS').removeClass('fa fa-minus');
				$('#icon-HCS').addClass('fa fa-plus');
				is_hcs_open = true
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
