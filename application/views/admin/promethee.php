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

				<h5 style="margin-bottom : 3px;" class="d-flex justify-content-between">PROMETHEE
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
					<!-- Konfersi Data -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Konfersi Data</span>
						<button type="button" id="btn-minimize-KD" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-KD"></i>
						</button>
					</div>
					<div class="card-body" id="card-KD" style="display: none">
						<div class="table-responsive">
							<div id="individu-konfersi" style="display:none">
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
							<div id="keluarga-konfersi">
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
					<!-- Deviasi -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Menentukan Deviasi Berdasarkan Perbandingan Berpasangan</span>
						<button type="button" id="btn-minimize-D" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-D"></i>
						</button>
					</div>
					<div class="card-body" id="card-D" style="display: none">
						<div class="table-responsive">
							<div id="individu-deviasi" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-deviasi">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
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
					<!-- Preferensi -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Penerapan Fungsi Preferensi</span>
						<button type="button" id="btn-minimize-P" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-P"></i>
						</button>
					</div>
					<div class="card-body" id="card-P" style="display: none">
						<div class="table-responsive">
							<div id="individu-preferensi" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-preferensi">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
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
					<!-- Indeks Preferensi -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Perhitungan Indeks Preferensi</span>
						<button type="button" id="btn-minimize-IP" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-IP"></i>
						</button>
					</div>
					<div class="card-body" id="card-IP" style="display: none">
						<div class="table-responsive">
							<div id="individu-ip" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
											<th>Pendidikan</th>
											<th>Kesehatan</th>
											<th>Ekonomi</th>
											<th>Jumlah</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-ip">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>D (a,b)</th>
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
					<!-- Partial Ranking -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Partial Ranking</span>
						<button type="button" id="btn-minimize-PR" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-PR"></i>
						</button>
					</div>
					<div class="card-body" id="card-PR" style="display: none">
						<div class="table-responsive">
							<div id="individu-pr" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Leaving Flow</th>
											<th>Entering Flow</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-pr">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Leaving Flow</th>
											<th>Entering Flow</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<!-- Complete Ranking -->
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-calculator" aria-hidden="true"></i>
							Complete Ranking</span>
						<button type="button" id="btn-minimize-CR" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-CR"></i>
						</button>
					</div>
					<div class="card-body" id="card-CR" style="display: none">
						<div class="table-responsive">
							<div id="individu-cr" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Net Flow</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-cr">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Net Flow</th>
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
						<button type="button" id="btn-minimize-PA" class="btn btn-tool" data-card-widget="collapse">
							<i class="fa fa-plus" id="icon-PA"></i>
						</button>
					</div>
					<div class="card-body" id="card-PA" style="display: none">
						<div class="table-responsive">
							<div id="individu-pa" style="display:none">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Net Flow</th>
										</tr>
									</thead>
								</table>
							</div>
							<div id="keluarga-pa">
								<table class="table table-bordered" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID Nama</th>
											<th>Nama</th>
											<th>Net Flow</th>
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
				url: api + 'PROMETHEE/individu',
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
					$('#individu-konfersi table').DataTable({
						data: response.data.konfersi,
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
					$('#individu-deviasi table').DataTable({
						data: response.data.deviasi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
					$('#individu-preferensi table').DataTable({
						data: response.data.preferensi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
					$('#individu-ip table').DataTable({
						data: response.data.ip,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
					$('#individu-pr table').DataTable({
						data: response.data.pr,
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
									return row.leaving_flow.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.entering_flow.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-cr table').DataTable({
						data: response.data.cr,
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
									return row.net_flow.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#individu-pa table').DataTable({
						data: response.data.pa,
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
									return row.net_flow.toFixed(2)
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
				url: api + 'PROMETHEE/keluarga',
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
					$('#keluarga-konfersi table').DataTable({
						data: response.data.konfersi,
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
					$('#keluarga-deviasi table').DataTable({
						data: response.data.deviasi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
					$('#keluarga-preferensi table').DataTable({
						data: response.data.preferensi,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
					$('#keluarga-ip table').DataTable({
						data: response.data.ip,
						columns: [{
								"render": function(data, type, row, meta) {
									return row.id
								},
								className: "text-center"
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
							},
							{
								"render": function(data, type, row) {
									return row.jumlah
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-pr table').DataTable({
						data: response.data.pr,
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
									return row.leaving_flow.toFixed(2)
								},
								className: "text-center"
							},
							{
								"render": function(data, type, row) {
									return row.entering_flow.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-cr table').DataTable({
						data: response.data.cr,
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
									return row.net_flow.toFixed(2)
								},
								className: "text-center"
							}
						]
					});
					$('#keluarga-pa table').DataTable({
						data: response.data.pa,
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
									return row.net_flow.toFixed(2)
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
				$('#keluarga-konfersi').show()
				$('#keluarga-deviasi').show()
				$('#keluarga-preferensi').show()
				$('#keluarga-ip').show()
				$('#keluarga-matrix').show()
				$('#keluarga-pr').show()
				$('#keluarga-cr').show()
				$('#keluarga-pa').show()

				$('#individu-alternatif').hide()
				$('#individu-konfersi').hide()
				$('#individu-deviasi').hide()
				$('#individu-preferensi').hide()
				$('#individu-ip').hide()
				$('#individu-matrix').hide()
				$('#individu-pr').hide()
				$('#individu-cr').hide()
				$('#individu-pa').hide()
			} else {
				ajax_individu()

				$('#keluarga-alternatif').hide()
				$('#keluarga-konfersi').hide()
				$('#keluarga-deviasi').hide()
				$('#keluarga-preferensi').hide()
				$('#keluarga-ip').hide()
				$('#keluarga-matrix').hide()
				$('#keluarga-pr').hide()
				$('#keluarga-cr').hide()
				$('#keluarga-pa').hide()

				$('#individu-alternatif').show()
				$('#individu-konfersi').show()
				$('#individu-deviasi').show()
				$('#individu-preferensi').show()
				$('#individu-ip').show()
				$('#individu-matrix').show()
				$('#individu-pr').show()
				$('#individu-cr').show()
				$('#individu-pa').show()

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

		let is_kd_open = true //Konversi Data
		$('#btn-minimize-KD').click(function() {
			$('#card-KD').toggle('fast')
			if (is_kd_open) {
				$('#icon-KD').removeClass('fa fa-plus');
				$('#icon-KD').addClass('fa fa-minus');
				is_kd_open = false
			} else {
				$('#icon-KD').removeClass('fa fa-minus');
				$('#icon-KD').addClass('fa fa-plus');
				is_kd_open = true
			}
		});

		let is_d_open = true //Deviasi
		$('#btn-minimize-D').click(function() {
			$('#card-D').toggle('fast')
			if (is_d_open) {
				$('#icon-D').removeClass('fa fa-plus');
				$('#icon-D').addClass('fa fa-minus');
				is_d_open = false
			} else {
				$('#icon-D').removeClass('fa fa-minus');
				$('#icon-D').addClass('fa fa-plus');
				is_d_open = true
			}
		});

		let is_p_open = true //Preferensi
		$('#btn-minimize-P').click(function() {
			$('#card-P').toggle('fast')
			if (is_p_open) {
				$('#icon-P').removeClass('fa fa-plus');
				$('#icon-P').addClass('fa fa-minus');
				is_p_open = false
			} else {
				$('#icon-P').removeClass('fa fa-minus');
				$('#icon-P').addClass('fa fa-plus');
				is_p_open = true
			}
		});

		let is_ip_open = true //Indeks Preferensi
		$('#btn-minimize-IP').click(function() {
			$('#card-IP').toggle('fast')
			if (is_ip_open) {
				$('#icon-IP').removeClass('fa fa-plus');
				$('#icon-IP').addClass('fa fa-minus');
				is_ip_open = false
			} else {
				$('#icon-IP').removeClass('fa fa-minus');
				$('#icon-IP').addClass('fa fa-plus');
				is_ip_open = true
			}
		});

		let is_pr_open = true //Partial Ranking
		$('#btn-minimize-PR').click(function() {
			$('#card-PR').toggle('fast')
			if (is_pr_open) {
				$('#icon-PR').removeClass('fa fa-plus');
				$('#icon-PR').addClass('fa fa-minus');
				is_pr_open = false
			} else {
				$('#icon-PR').removeClass('fa fa-minus');
				$('#icon-PR').addClass('fa fa-plus');
				is_pr_open = true
			}
		});

		let is_cr_open = true //Complete Ranking
		$('#btn-minimize-CR').click(function() {
			$('#card-CR').toggle('fast')
			if (is_cr_open) {
				$('#icon-CR').removeClass('fa fa-plus');
				$('#icon-CR').addClass('fa fa-minus');
				is_cr_open = false
			} else {
				$('#icon-CR').removeClass('fa fa-minus');
				$('#icon-CR').addClass('fa fa-plus');
				is_cr_open = true
			}
		});

		let is_pa_open = true //Perankingan Alternatif
		$('#btn-minimize-PA').click(function() {
			$('#card-PA').toggle('fast')
			if (is_pa_open) {
				$('#icon-PA').removeClass('fa fa-plus');
				$('#icon-PA').addClass('fa fa-minus');
				is_pa_open = false
			} else {
				$('#icon-PA').removeClass('fa fa-minus');
				$('#icon-PA').addClass('fa fa-plus');
				is_pa_open = true
			}
		});
	</script>
</body>

</html>
